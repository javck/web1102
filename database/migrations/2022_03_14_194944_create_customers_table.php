<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cust_id');
            $table->string('cust_name_c', 50);
            $table->string('cust_name_e', 50)->nullable();
            $table->string('ear_no', 20);
            $table->bigInteger('cust_eid');
            $table->string('contact', 20);
            $table->dateTime('birth')->nullable();
            $table->string('gender', 1);
            $table->string('addr', 250);
            $table->string('addr2', 250);
            $table->string('cust_tel', 20);
            $table->string('cust_email', 50);
            $table->integer('memstate')->nullable();
            $table->string('userid', 50);
            $table->string('pwd', 100);
            $table->string('bank', 3);
            $table->string('acct', 20);
            $table->string('acc_group', 10);
            $table->string('ac_sub', 20);
            $table->string('valid_code', 50);
            $table->boolean('validated')->default(false);
            $table->dateTime('lastpuchasedate')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
