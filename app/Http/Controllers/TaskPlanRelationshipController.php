<?php

namespace App\Http\Controllers;

use App\Task;
use App\TaskPlan;
use App\TaskPlanRelationship;
use Illuminate\Http\Request;

class TaskPlanRelationshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return TaskPlan::where('account_id', $request->account_id)->get();
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
    public function show(Request $request, $id)
    {
        $items = [];

        $tasksTotal = Task::where('status', true)->get();

        foreach ($tasksTotal as $itemTask) {
            $tasks = TaskPlanRelationship::where('account_id', $request->account_id)->where('task_id', $itemTask->id)->where('task_plan_id', $id)->count();

            if ($tasks > 0) {
                array_push($items, [
                    'id' => $itemTask->id,
                    'name' => $itemTask->name,
                    'checked' => true
                ]);
            } else {
                array_push($items, [
                    'id' => $itemTask->id,
                    'name' => $itemTask->name,
                    'checked' => false
                ]);
            }
        }

        $plan = TaskPlan::where('account_id', $request->account_id)->where('id', $id)->get();

        return ['plan' => $plan, 'tasks' => $items];
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
        if($request->checked) {
            $TaskPlanRelationship = new TaskPlanRelationship();

            $TaskPlanRelationship->task_plan_id = $id;
            $TaskPlanRelationship->task_id = $request->task_id;
    
            $TaskPlanRelationship->save();
    
            return ['status' => 'success'];
        } else {
            $task = TaskPlanRelationship::where('id', $id)->where('task_id', $request->task_id);

            $task->delete();
    
            return ['status' => 'success'];
        }
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
