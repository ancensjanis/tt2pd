<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscussionsKeywordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discussions_keywords', function (Blueprint $table) {
            $table->integer('discussionid')->unsigned();
            $table->integer('keywordid')->unsigned();
            $table->timestamps();

            $table->foreign('discussionid')->references('id')->on('discussions')->onDelete('cascade');
            $table->foreign('keywordid')->references('id')->on('keywords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('discussions_keywords');
    }
}
