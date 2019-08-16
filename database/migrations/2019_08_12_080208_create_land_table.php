<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->string('wow')->nullable();
            $table->integer('land_type_id')->nullable();
            $table->string('category')->nullable();
            $table->string('building')->nullable();
            $table->string('price')->nullable();
            $table->text('building_icons')->nullable();
            $table->text('info')->nullable();
            $table->text('table')->nullable();
            $table->string('img_name')->nullable()->default('500x500.png');
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
        Schema::dropIfExists('land');
    }
}
