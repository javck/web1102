<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('customer_id');
			$table->char('type', 1)->default("1");
			$table->bigInteger('employee_id');
			$table->string('email', 50);
			$table->string('receiver', 20);
			$table->string('destination', 100);
			$table->string('phone', 20)->nullable();
			$table->decimal('sub_total', 18, 2)->nullable(0);
			$table->decimal('tax', 18, 2)->nullable(0);
			$table->decimal('amount', 18, 2)->nullable(0);
			$table->string('payment', 20)->nullable();
			$table->string('shipping', 20)->nullable();
			$table->boolean('valid')->default(true);
			$table->boolean('closed')->default(false);
			$table->bigInteger('approved_by')->nullable();
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
		Schema::dropIfExists('orders');
	}
}
