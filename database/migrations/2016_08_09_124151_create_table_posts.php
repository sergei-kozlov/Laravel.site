<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('posts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->nullable();
        $table->string('email')->nullable();
        $table->text('subject')->nullable();
        $table->timestamp('published_at')->nullable();
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
        Schema::drop('posts');

    }

}
