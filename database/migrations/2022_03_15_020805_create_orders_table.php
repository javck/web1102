<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigIntegr('customer_id', 20);
            $table->string('cust_name', 50);
            $table->timestamps('order_date');
            $table->string('order_type', 1);
            $table->bigIntegr('employee_id', 20);
            $table->string('email', 50);
            $table->string('receiver', 20);
            $table->string('ship_addr', 100);
            $table->decimal('total', 18, 2);
            $table->decimal('salestax', 18, 2);
            $table->decimal('amt', 18, 2);
            $table->bigIntegr('pmt_id', 1);
            $table->bigIntegr('ship_id', 1);
            $table->string('order_guid', 20);
            $table->integer('validation');
            $table->integer('closed');
            $table->string('mgmr', 20);
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
        Schema::dropIfExists('orders');
    }
};
