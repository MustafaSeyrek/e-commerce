<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('product', function (Blueprint $table) {
        $table->bigIncrements('ID');
        $table->string('Model'); 
        $table->string('RAM');
        $table->string('Memory');  
        $table->string('Resolution');   
        $table->string('ScreenSize');    
        $table->string('ProcessorBrand');      
        $table->double('Price'); 
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
        Schema::dropIfExists('product');
    }
}
