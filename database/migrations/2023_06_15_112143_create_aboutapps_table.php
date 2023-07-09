<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutapps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ico')->nullable();
            $table->string('logo')->nullable();
            $table->string('theme')->nullable();
            $table->string('mode')->nullable();
            $table->string('color')->nullable();
            $table->string('domain')->nullable();

            $table->tinyInteger('lifecycle')->nullable(); 
            
            $table->tinyInteger('uiux_mobile')->nullable(); 
            $table->tinyInteger('uiux_tablet')->nullable(); 
            $table->tinyInteger('auth_google')->nullable(); 
            $table->tinyInteger('auth_github')->nullable(); 

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
        Schema::dropIfExists('aboutapps');
    }
}
