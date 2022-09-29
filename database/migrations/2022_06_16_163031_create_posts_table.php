<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->text('news_title');
            $table->longText('news_description');
            $table->bigInteger('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->mediumText('excerpt')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->text('meta_tag')->nullable();
            $table->text('meta_content')->nullable();
            $table->bigInteger('is_feature')->nullable();
            $table->string('feature_image')->nullable();
            $table->bigInteger('status')->nullable();
            $table->string('publish_date')->nullable();
            $table->bigInteger('flag')->nullable();
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
