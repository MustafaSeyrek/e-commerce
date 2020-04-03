<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->bigIncrements('id');           
            $table->double('total_cost');          
            $table->unsignedBigInteger('FK_CustomerID');
            $table->unsignedBigInteger('FK_ProductID');
            $table->unsignedBigInteger('FK_PaymentID');
            $table->foreign('FK_CustomerID')->references('id')->on('users');
            $table->foreign('FK_ProductID')->references('ID')->on('product');
            $table->foreign('FK_PaymentID')->references('id')->on('payments');        
           
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
        Schema::dropIfExists('payment_details');
    }
}
