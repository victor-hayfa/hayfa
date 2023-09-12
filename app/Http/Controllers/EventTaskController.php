<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventTask;
use Illuminate\Http\Request;

class EventTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return EventTask::query()->where('account_id', $request->account_id)->with('taskOne')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventTask  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return EventTask::where('account_id', $request->account_id)->with('task')->with('user')->with('comments')->where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventLocal  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function edit(EventTask $eventTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventTask  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eventTask = EventTask::where('id', $id)->first();

        if ($request->has('status')) {
            $eventTask->status = $request->status;
        }

        if ($request->has('description')) {
            $eventTask->description = $request->description;
        }

        $eventTask->save();

        $eventTaskTotal = EventTask::where('event_id', $eventTask->event_id)->count();
        $eventTaskComplete = EventTask::where('event_id', $eventTask->event_id)->where('status', true)->count();

        if ($eventTaskComplete === 0) {
            $percentage = 0;
        } else if ($eventTaskTotal === $eventTaskComplete) {
            $percentage = 100;
        } else {
            $r = $eventTaskTotal-$eventTaskComplete;
            $percentage2 = $r/$eventTaskTotal * 100;
            $percentage = 100 - $percentage2;
        }

        Event::where('id', $eventTask->event_id)
            ->update(
                [
                    'percentage' => $percentage
                ]
            );

        return ['status' => 'success'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventTask  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updateEventDescription(Request $request, $id)
    {
        $eventTask = EventTask::where('id', $id)->first();

        $eventTask->description = $request->description;

        $eventTask->save();

        return ['status' => 'success'];
    }
}
