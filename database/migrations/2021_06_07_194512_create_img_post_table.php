<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_post', function (Blueprint $table) {
            $table->id();

            $table -> unsignedBigInteger('post_id');
            $table -> foreign('post_id') -> references('id') -> on('posts')->onDelete('cascade');

            $table -> unsignedBigInteger('img_id');
            $table -> foreign('img_id') -> references('id') -> on('imgs')->onDelete('cascade');

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
        Schema::table('img_post', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
            $table->dropForeign(['img_id']);
        });

        Schema::dropIfExists('img_post');
    }
}
