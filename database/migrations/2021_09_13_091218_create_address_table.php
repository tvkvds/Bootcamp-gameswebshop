<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       
        Schema::create('addresses', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('country');
            $table->string('street');
            $table->integer('unit');
            $table->string('zipcode');
            $table->string('city');
            $table->string('unit_extra');
            $table->boolean('billing_address');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
