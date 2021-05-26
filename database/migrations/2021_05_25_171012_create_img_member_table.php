<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('img_member', function (Blueprint $table) {
            $table->id();

            $table -> unsignedBigInteger('img_id');
            $table -> foreign('img_id') -> references('id') -> on('images');

            $table -> unsignedBigInteger('member_id');
            $table -> foreign('member_id') -> references('id') -> on('members');

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
        Schema::dropIfExists('img_member');
    }
}
