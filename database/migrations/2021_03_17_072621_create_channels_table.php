<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('avatar_src', 500);
            $table->string('title', 50);
            $table->string('description', 500);
            $table->unsignedBigInteger('likes');
            $table->enum('category_channel', ['gamings', 'streaming', 'actuality', 'flashinfo']);
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }
}
