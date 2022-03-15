<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lot_id');
            $table->bigInteger('cust_id');
            $table->bigInteger('prod_id');
            $table->string('prod_nm', 50);
            $table->decimal('unit_price', 18, 2)->default(0);
            $table->integer('prod_qty')->default(0);
            $table->dateTime('shop_date')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
