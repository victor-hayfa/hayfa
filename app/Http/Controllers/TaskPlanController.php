<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskPlan;
use Illuminate\Http\Request;

class TaskPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return TaskPlan::where('account_id', $request->account_id)->where('account_id', 1)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new TaskPlan;

        $task->name = $request->name;
        $task->tasks = json_encode($request->tasks);
        $task->account_id = $request->account_id;

        $task->save();

        return ['status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskPlan  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskPlan  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskPlan $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TaskPlan::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'tasks' => json_encode($request->tasks),
                ]
            );

        return ['status' => 'success'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = TaskPlan::where('id', $id);

        $task->delete();

        return ['status' => 'success'];
    }
}
