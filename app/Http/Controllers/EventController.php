<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventTask;
use App\TaskPlan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        $events = Event::where('account_id', $request->account_id)->with('local')->with(['tasks', 'tasks.task', 'tasks.user'])->get();
        $users= [];

        foreach ($events as $event) {
            $userIds = json_decode($event->users_id);
            
            if ($userIds) {
                foreach ($userIds as $userId) {
                    $user = User::where('account_id', $request->account_id)->find($userId);

                    if ($user) {
                        $users[] = $user;
                    }
                }
            }

            $event['users_ids'] = $users;
        }

        // $eventT = [];

        // foreach ($events as $key => $event) {
        //     $eventTaskTotal = EventTask::where('event_id', $event->id)->count();
        //     $eventTaskComplete = EventTask::where('event_id', $event->id)->where('status', true)->count();

        //     if ($eventTaskComplete === 0) {
        //         $progress = 0;
        //     } else {
        //         $r = $eventTaskTotal-$eventTaskComplete;
        //         $progress = $r/$eventTaskTotal * 100;
        //     }

        //     array_push($eventT, [$progress, $event]);
        // }
//========================================
        // $usersEvent = Event::select('users_id')
        //     ->where('id', $id)
        //     ->first();
    
        // if ($usersEvent && $usersEvent->users_id) {
        //     $userIds = json_decode($usersEvent->users_id);
        //     if (is_array($userIds)) {
        //         foreach ($userIds as $userId) {
        //             $user = User::find($userId);
        //             if ($user) {
        //                 $users[] = $user;
        //             }
        //         }
        //     }
        // }
    
        // return compact('event', 'users');

        return $events;
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
        $event = new Event();

        $event->name = $request->name;
        $event->date_event = $request->date_event;
        $event->hour_event = $request->hour_event.':00';
        $event->local_id = $request->local_id;
        $event->task_plan_id = $request->task_plan_id;
        $event->status = $request->status;
        $event->users_id = json_encode($request->users_id);
        $event->account_id = $request->account_id;
        $event->save();

        $taskPlan = TaskPlan::query()->where('id', $event->task_plan_id)->first();

        $tasks = json_decode($taskPlan['tasks']);

        foreach ($tasks as $task) {
            $eventTask = new EventTask();

            $eventTask->task_id = $task;
            $eventTask->task_plan_id = $event->task_plan_id;
            $eventTask->account_id = 1;
            $eventTask->event_id = $event->id;
            $eventTask->status = 0;

            $eventTask->save();
        }


        return ['status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = [];
    
        $event = Event::with('local')
            ->with('tasks')
            ->with('tasks.task')
            ->with('tasks.user')
            ->with('tasks.comments')
            ->with('tasks.comments.user')
            ->with('items')
            ->with('items.stock')
            ->where('id', $id)
            ->get();
    
        $usersEvent = Event::select('users_id')
            ->where('id', $id)
            ->first();
    
        if ($usersEvent && $usersEvent->users_id) {
            $userIds = json_decode($usersEvent->users_id);
            if (is_array($userIds)) {
                foreach ($userIds as $userId) {
                    $user = User::find($userId);
                    if ($user) {
                        $users[] = $user;
                    }
                }
            }
        }
    
        return compact('event', 'users');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        info($request->has('stage_id'));
        if ($request->has('stage_id')) {
            DB::table('events')
              ->where('id', $id)
              ->update(['stage_id' => $request->stage_id]);
        } else {
            Event::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'date_event' => $request->date_event,
                    'hour_event' => $request->hour_event,
                    'local_id' => $request->local_id,
                    'status' => $request->status,
                ]
            ); 
        }

        return ['status' => 'success'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event = Event::where('id', $event->id);

        $event->delete();

        return ['status' => 'success'];
    }
}
