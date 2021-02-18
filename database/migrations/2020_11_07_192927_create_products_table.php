<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('Product_ID')->primary();
            $table->string('Product_Name');
            $table->float('Cost_of_Product');
            $table->float('Sales_Price');
            $table->string('Weight');
            $table->float('Discount_rate');
            $table->date('Expire_Date');  
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
        Schema::dropIfExists('products');
    }
}
