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
        Schema::create('aboutskills',function (Blueprint $table)
        {
            $table->id();
            $table->tinyInteger('html');
            $table->tinyInteger('css');
            $table->tinyInteger('js');
            $table->tinyInteger('photoshop');
            $table->tinyInteger('php');
            $table->tinyInteger('bootstrap');
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
        Schema::dropIfExists('aboutskills');
    }
};
