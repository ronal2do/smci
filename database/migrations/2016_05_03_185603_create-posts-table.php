<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo'); 
            $table->longText('texto');
            $table->string('slug'); 
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                                    ->on('users')
                                    ->onDelete('restrict');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')
                                    ->on('categorias')
                                    ->onDelete('restrict');
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
