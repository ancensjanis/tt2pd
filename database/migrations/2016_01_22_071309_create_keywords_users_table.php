<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords_users', function (Blueprint $table) {
            $table->integer('keywordid')->unsigned();
            $table->integer('userid')->unsigned();
            $table->timestamps();

            $table->foreign('keywordid')->references('id')->on('keywords')->onDelete('cascade');
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keywords_users');
    }
}
