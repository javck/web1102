<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$employee = Employee::get();
		if (isset($employee)) {
			return ['status' => true, 'result' => $employee];
		} else {
			return ['status' => false, 'result' => $employee];
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$employee = new Employee($request->all());
		$result = $employee->save();
		if ($result) {
			return ['status' => 1];
		} else {
			return ['status' => 0];
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$employee = Employee::findOrFail($id);
		if (isset($employee)) {
			return ['status' => ture, 'result' => $employee];
		} else {
			return ['status' => false, 'result' => $employee];
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Employee $employee) {
		$rows = $employee->update($request->all());
		if ($rows == 1) {
			return ['status' => true];
		} else {
			return ['status' => false];
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Employee $employee) {
		$status = $employee->delete();
		return ['status' => $status];
	}
}
