<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksPlanRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks_plan_relationship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('task_plan_id');
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('account_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('task_plan_id')->references('id')->on('tasks_plan')->onDelete('cascade');
            $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
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
        Schema::dropIfExists('stages');
    }
}
