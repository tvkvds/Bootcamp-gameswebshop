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

        /*
        'id',
        'name',
        'description',
        'price',
        'price_discount',
        'stock',
        'publisher',
        'release_date',
        'timestamps',
        'deleted'
    ];
        */
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->integer('price_discount');
            $table->integer('stock');
            $table->string('publisher');
            $table->date('release_date');
            $table->string('slug');
            $table->integer('sold');
            $table->timestamps();
            $table->softdeletes();
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
