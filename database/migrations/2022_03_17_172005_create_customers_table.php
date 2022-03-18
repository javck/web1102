<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('customers', function (Blueprint $table) {
			$table->id();
			$table->string('name', 50);
			$table->string('ear_no', 20);
			$table->string('eid', 30);
			$table->string('contact', 20);
			$table->date('birthday')->nullable();
			$table->char('gender', 1);
			$table->string('address', 250);
			$table->string('phone', 20);
			$table->string('email', 50);
			$table->string('membership', 20)->nullable();
			$table->string('userid', 50);
			$table->string('pwd', 100);
			$table->string('validation', 50)->nullable();
			$table->string('activation', 20)->nullable();
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
		Schema::dropIfExists('customers');
	}
}
