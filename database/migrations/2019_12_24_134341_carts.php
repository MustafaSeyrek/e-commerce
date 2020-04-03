<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('Name');
            $table->double('Price');        
            $table->unsignedBigInteger('FK_ProductID');           
            $table->foreign('FK_ProductID')->references('ID')->on('product');
            $table->unsignedBigInteger('FK_CustomerID');
            $table->foreign('FK_CustomerID')->references('id')->on('users');
            $table->rememberToken();
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
