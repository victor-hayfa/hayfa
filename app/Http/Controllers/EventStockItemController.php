<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventStockItems;
use App\EventTask;
use Illuminate\Http\Request;

class EventStockItemController extends Controller
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
        $eventDate = Event::where('id', $request->event_id)->select('date_event')->first();

        $eventStockItems = new EventStockItems();

        $eventStockItems->stock_id = $request->stock_id;
        $eventStockItems->event_id = $request->event_id;
        $eventStockItems->quantity = $request->quantity;
        $eventStockItems->date_event = $eventDate->date_event ?? null;
        $eventStockItems->account_id = $request->account_id;

        $eventStockItems->save();

        return ['status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventTask  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return EventStockItems::with('stock')->where('event_id', $id)->get();
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

        $eventTask->status = $request->status;

        $eventTask->save();

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
        $eventStockItems = EventStockItems::where('id', $id);

        $eventStockItems->delete();

        return ['status' => 'success'];
    }
}
