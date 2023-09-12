<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventStockItems;
use App\EventStockItemsFlowers;
use App\EventTask;
use Illuminate\Http\Request;

class EventStockItemFlowerController extends Controller
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

        $eventStockItemsFlowers = new EventStockItemsFlowers();

        $eventStockItemsFlowers->stock_id = $request->stock_id;
        $eventStockItemsFlowers->event_id = $request->event_id;
        $eventStockItemsFlowers->quantity = $request->quantity;
        $eventStockItemsFlowers->date_event = $eventDate->date_event ?? null;
        $eventStockItemsFlowers->account_id = $request->account_id;

        $eventStockItemsFlowers->save();

        return ['status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventTask  $eventTask
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return EventStockItemsFlowers::with('stock')->where('account_id', $request->account_id)->where('event_id', $id)->get();
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
        $eventStockItemsFlowers = EventStockItemsFlowers::where('id', $id);

        $eventStockItemsFlowers->delete();

        return ['status' => 'success'];
    }
}
