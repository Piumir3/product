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
            $table->string('Order_Number')->primary();
            $table->float('Quentity');
            $table->date('Date');
            $table->float('Bill_Value');
            $table->string('User_ID');
            $table->string('Shop_ID');
            $table->string('Vehicle_Number');  
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
}
