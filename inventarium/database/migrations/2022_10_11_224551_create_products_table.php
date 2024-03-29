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
            $table->id();
            $table->string('name');
            //$table->string('slug');
            $table->string('cover')->nullable();
            $table->decimal('price')->default('0.00');
            $table->text('description')->nullable();
            $table->integer('stock')->default(0);
        // $table->string('categoria');
        //$table->foreign('categoria')->references('categoria')->on('categoria');
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
