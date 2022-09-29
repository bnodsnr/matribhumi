<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_options', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('company_name');
            $table->text('address');
            $table->text('phone_no');
            $table->text('ads_phone_no');
            $table->text('company_email');
            $table->text('registration_no');
            $table->text('president');
            $table->text('editor');
            $table->text('face_book');
            $table->text('instagram');
            $table->text('linked');
            $table->text('twitter');
            $table->text('youtube');
            $table->text('google_plus');
            $table->text('show_popup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_options');
    }
}
