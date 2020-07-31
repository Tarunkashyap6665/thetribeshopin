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
            $table->foreignId('user_id');
            $table->string('user_email');
            $table->string('name');
            $table->mediumText('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('mobile');
            $table->integer('pincode');
            $table->float('shipping_charges');
            $table->text('coupon_code')->nullable();
            $table->float('coupon_amount')->nullable();
            $table->boolean('order_status')->nullable();
            $table->string('payment_method');
            $table->float('grand_total');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
