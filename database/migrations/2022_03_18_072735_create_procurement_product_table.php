<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementProductTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('procurement_product', function (Blueprint $table) {
			$table->id();
			$table->foreignId('procurement_id')->constrained();
			$table->foreignId('product_id')->constrained();
			$table->decimal('unit_price', 18, 2);
			$table->integer('qty');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		schema::table('procurement_product', function (Blueprint $table) {
			$table->dropForeign(['procurement_id']);
			$table->dropForeign(['product_id']);
		});

		Schema::dropIfExists('procurement_product');
	}
}
