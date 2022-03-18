<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementDetailsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('procurement_details', function (Blueprint $table) {
			$table->id();
			$table->bigInteger('procurement_id');
			$table->bigInteger('product_id');
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
		Schema::dropIfExists('procurement_details');
	}
}
