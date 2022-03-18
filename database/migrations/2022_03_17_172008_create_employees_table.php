<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('employees', function (Blueprint $table) {
			$table->id();
			$table->string('name', 50);
			$table->string('department', 20);
			$table->string('rank', 20);
			$table->string('personal_id', 20);
			$table->date('birthday');
			$table->char('gender', 1);
			$table->string('address', 250);
			$table->string('phone', 20)->nullable();
			$table->string('email', 50)->nullable();
			$table->string('status', 20)->nullable();
			$table->string('userid', 50)->nullable();
			$table->string('pwd', 100)->nullable();
			$table->string('validation', 50)->nullable();
			$table->string('emer_contact', 20)->nullable();
			$table->string('emer_phone', 20)->nullable();
			$table->text('remark')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('employees');
	}
}
