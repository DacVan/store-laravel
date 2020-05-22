<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('OrderID');
            $table->tinyInteger('OrderStatus')->unsigned();
            $table->string('OrderCustomer');
            $table->string('OrderAddress');
            $table->string('OrderPhone');
            $table->date('OrderDate')->default(now());
            $table->decimal('OrderTotal', 18, 0)->nullable();
    
            //tạo liên kết đến khóa chính bảng payment_method
            $table->integer('PayID')->unsigned();
            $table->foreign('PayID')->references('PayID')->on('payment_method')->onDelete('cascade');

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
        Schema::dropIfExists('order');
    }
}
