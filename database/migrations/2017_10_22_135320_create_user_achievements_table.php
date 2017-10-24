<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->boolean('views_1k')->nullable();
            $table->boolean('views_10k')->nullable();
            $table->boolean('views_100k')->nullable();
            $table->boolean('views_500k')->nullable();
            $table->boolean('views_1m')->nullable();
            $table->boolean('views_10m')->nullable();
            $table->boolean('likes_100')->nullable();
            $table->boolean('likes_1k')->nullable();
            $table->boolean('likes_10k')->nullable();
            $table->boolean('likes_50k')->nullable();
            $table->boolean('likes_100k')->nullable();
            $table->boolean('likes_500k')->nullable();
            $table->boolean('likes_1m')->nullable();
            $table->boolean('bookmarks_1k')->nullable();
            $table->boolean('bookmarks_10k')->nullable();
            $table->boolean('bookmarks_100k')->nullable();
            $table->boolean('bookmarks_500k')->nullable();
            $table->boolean('bookmarks_1m')->nullable();
            $table->boolean('bookmarks_10m')->nullable();
            $table->boolean('stories_10')->nullable();
            $table->boolean('stories_2_a_day')->nullable();
            $table->boolean('stories_5_a_day')->nullable();
            $table->boolean('stories_10_plus_a_day')->nullable();
            $table->boolean('story_1_per_day_week')->nullable();
            $table->boolean('story_1_per_day_month')->nullable();
            $table->boolean('social_active')->nullable();
            $table->boolean('user_confirmed')->nullable();
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
        Schema::dropIfExists('user_achievements');
    }
}
