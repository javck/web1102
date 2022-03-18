<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->string('name', 50);
			$table->string('unit', 20)->nullable();
			$table->string('itm_code', 20);
			$table->bigInteger('supplier_id');
			$table->string('category_id', 20);
			$table->integer('min_qty')->nullable(100);
			$table->decimal('cost', 18, 2);
			$table->decimal('unit_price', 18, 2);
			$table->integer('qty_instock')->nullable(0);
			$table->string('status', 20)->nullable('none');
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
		Schema::dropIfExists('products');
	}
}
