<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('002_employee', function (Blueprint $table) {
			$table->id();
			$table->char('emp_id', 20);
			$table->char('emp_name_c', 50);
			$table->char('emp_name_e', 50)->nullable();
			$table->char('dept_id', 20);
			$table->integer('rank_id');
			$table->char('emp_id_no', 20);
			$table->dateTime('emp_birth');
			$table->char('emp_gender', 1);
			$table->char('emp_addr', 250);
			$table->char('emp_state', 20)->nullable();
			$table->char('emp_country', 20);
			$table->char('emp_zip', 10);
			$table->char('emp_tel', 20);
			$table->char('emp_email', 50);
			$table->integer('emp_status');
			$table->char('userid', 50);
			$table->char('pwd', 100);
			$table->char('valid_code', 50);
			$table->char('emer_contact', 20)->nullable();
			$table->char('emer_tel', 20)->nullable();
			$table->text('remark')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('002_employee');
	}
}
