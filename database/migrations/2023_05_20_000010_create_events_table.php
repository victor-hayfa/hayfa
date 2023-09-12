<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('local_id');
            $table->unsignedBigInteger('task_plan_id');
            $table->dateTime('date_event');
            $table->time('hour_event');
            $table->float('percentage', 8, 2)->default(0);
            $table->boolean('status');
            $table->jsonb('users_id');
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('stage_id');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('stage_id')->references('id')->on('stages')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('local_id')->references('id')->on('events_local')->onDelete('cascade');
            $table->foreign('task_plan_id')->references('id')->on('tasks_plan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
