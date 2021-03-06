<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->string('lot_dimension');
            $table->string('home_area');
            $table->string('lot_area');
            $table->string('baths');
            $table->string('floors');
            $table->string('beds');
            $table->string('price');
            $table->string('description');
            $table->string('neighborhood_desc');
            $table->string('secondary_color');
            $table->string('primary_color');
            $table->string('visit_active_time');
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
