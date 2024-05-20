<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('product_description');
            $table->integer('quantity');
            $table->float('total_weight');
            $table->string('service');
            $table->string('fragrance');
            $table->decimal('total_price', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->decimal('discount', 8, 2)->nullable();
            $table->date('order_date');
            $table->date('completion_estimation_date');
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
        Schema::dropIfExists('orders');
    }
}
