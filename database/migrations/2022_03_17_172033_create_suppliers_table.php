<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('suppliers', function (Blueprint $table) {
			$table->id();
			$table->string('name', 50);
			$table->string('ear_no', 20);
			$table->string('address', 250);
			$table->string('inv_addr', 250)->nullable();
			$table->string('phone', 20);
			$table->string('contact', 20);
			$table->string('email', 50)->nullable();
			$table->string('owner', 20);
			$table->date('contract_start');
			$table->date('contract_end')->nullable();
			$table->string('userid', 50)->nullable();
			$table->string('pwd', 100)->nullable();
			$table->string('validation', 50)->nullable();
			$table->string('status', 20)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('suppliers');
	}
}
