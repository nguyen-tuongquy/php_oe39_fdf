<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->foreignId('product_id');
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->integer('quantity');
            $table->timestamp('create_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}
