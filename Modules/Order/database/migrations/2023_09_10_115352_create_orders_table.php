<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('operator_id')->unsigned()->nullable();
            $table->integer('provider_id')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('service_id')->unsigned();
            $table->string('city_name');
            $table->string('city_id');
            $table->string('state_name');
            $table->string('state_id');
            $table->string('mobile');
            $table->text('address');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();


            $table->tinyInteger('status')->default(0);//0:waiting 1:in-progress 2:done 3:payed

            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('deleted_by')->unsigned()->nullable();

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
        Schema::dropIfExists('orders');
    }
};
