<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdhistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodhists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id', 20);
            $table->timestamps('update_date');
            $table->bigInteger('employee_id', 20);
            $table->decimal('old_cost', 18, 2);
            $table->decimal('new_cost', 18, 2);
            $table->decimal('old_price', 18, 2);
            $table->decimal('new_price', 18, 2);
            $table->integer('old_state');
            $table->integer('new_state');
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
        Schema::dropIfExists('prodhists');
    }
};
