<?php

namespace App\Http\Controllers;

use App\EventTask;
use App\EventTaskComments;
use Illuminate\Http\Request;

class EventTaskCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $eventTaskComments = new EventTaskComments();

        $eventTaskComments->comments = $request->comments;
        $eventTaskComments->event_task_id = $request->event_task_id;
        $eventTaskComments->event_id = $request->event_id;
        $eventTaskComments->user_id = $request->user_id;
        $eventTaskComments->account_id = $request->account_id;

        $eventTaskComments->save();

        return $eventTaskComments->with('user')->orderBy('created_at', 'desc')->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventTask  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return EventTaskComments::where('account_id', $request->account_id)->where('event_task_id', $id)->with('user')->orderBy('created_at', 'desc')->get();
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
     * @param  \App\EventTaskComments  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        EventTaskComments::where('id', $id)
        ->update(
            [
                'comments' => $request->comments
            ]
        );

    return ['status' => 'success'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EventTaskComments  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventTaskComments = EventTaskComments::where('id', $id);

        $eventTaskComments->delete();

        return ['status' => 'success'];
    }
}
