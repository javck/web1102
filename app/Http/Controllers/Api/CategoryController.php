<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$category = Category::get();
		if (isset($category)) {
			return ['status' => true, 'result' => $category];
		} else {
			return ['status' => false, 'result' => $category];
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$category = new Category($request->all());

		$result = $category->save();

		if ($result) {
			return ['status' => true];
		} else {
			return ['status' => false];
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$category = Category::findOrFail($id);
		if (isset($category)) {
			return ['status' => true];
		} else {
			return ['status' => false];
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Category $category) {
		$rows = $category->update($request->all());
		if ($row == 1) {
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
	public function destroy(Category $category) {
		$status = $category->delete();
		return ['status' => $status];
	}
}