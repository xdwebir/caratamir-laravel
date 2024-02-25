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
        Schema::create('providerprofiles', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->unsigned();
            $table->string('city_name');
            $table->string('city_id');
            $table->string('state_name');
            $table->string('state_id');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('services_id');

            $table->text('address');
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();

            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('providerprofiles');
    }
};
