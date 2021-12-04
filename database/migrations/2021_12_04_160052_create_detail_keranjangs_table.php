<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKeranjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_keranjangs', function (Blueprint $table) {
            $table->id();
            $table->Integer('jumlah');
            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('ikanhias')
                ->onDelete('cascade');
            $table->bigInteger('keranjang_id')->unsigned();
            $table->foreign('keranjang_id')->references('id')->on('keranjangs')
                ->onDelete('cascade');
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
        Schema::dropIfExists('detail_keranjangs');
    }
}