<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text('news_title');
            $table->longText('news_description');
            $table->crea('author_id');
            $table->mediumText('excerpt')->nullable();
            $table->bigInteger('category');
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
        Schema::dropIfExists('news');
    }
}
