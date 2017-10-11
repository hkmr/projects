<?php

use Illuminate\Support\Facades\Schema;
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
            $table->boolean('status')->default(1);
            $table->integer('user_id')->unsigned();
            $table->integer('views')->unsigned()->default(0);
            $table->integer('likes')->unsigned()->default(0);
            $table->integer('bookmarks')->unsigned()->default(0);
            $table->string('title');
            $table->string('featured_image')->nullable();
            $table->string('image');
            $table->text('body');
            $table->string('slug');
            $table->integer('category_id');
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
        Schema::dropIfExists('posts');
    }
}
