<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_level', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->boolean('status');
            $table->unsignedBigInteger('account_id');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_level');
    }
}
