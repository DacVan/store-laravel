<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->integer('OrderID')->unsigned();
            $table->integer('ProID')->unsigned();
            $table->primary(['OrderID', 'ProID']);

            $table->integer('OrdQuantity')->unsigned();
            $table->decimal('OrdPrice',18,0);

            //tạo liên kết đến bảng order
            $table->foreign('OrderID')->references('OrderID')->on('order')->onDelete('cascade');
            $table->foreign('ProID')->references('ProID')->on('product')->onDelete('cascade');

            
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
        Schema::dropIfExists('order_detail');
    }
}
