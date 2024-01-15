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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsigned();  // provider ID
            $table->integer('accountant_id')->unsigned()->nullable();
            $table->bigInteger('amount');
            $table->string('date');
            $table->string('tracking_code');
            $table->tinyInteger('status')->default(0); //0:defined 1:accepted 2:removed
            $table->tinyInteger('type')->default(0); //0:card-to-card 1:online-payed

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
        Schema::dropIfExists('payments');
    }
};
