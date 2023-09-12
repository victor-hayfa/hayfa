<?php

namespace App\Http\Controllers;

use App\Event;
use App\Stock;
use App\EventStockItems;
use Illuminate\Http\Request;


class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Stock::where('account_id', $request->account_id)->with('category')->where('type', 'general')->get();
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
         // Verifica se já existe o codigo no banco de dados
         $existingCode = Stock::where('code', $request->code)->first();

         if ($existingCode) {
            return response()->json(['status' => 'error', 'message' => 'Já existe um item com esse código.'], 422);
         }
         else {
            $stock = new Stock;

            if ($request->file('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('/stocks/');
                $image->move($imagePath, $imageName);
                $stock->image = '/stocks/' . $imageName;
            }

            $stock->code = $request->code;
            $stock->name = $request->name;
            $stock->quantity = '1';
           
            $stock->status =  $request->status ? 1 : 0;
            $stock->type = 'general';
            $stock->account_id = $request->account_id;
            $stock->category_id = $request->category_id;

            $stock->save();

            return ['status' => 'success'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $items = [];
        //Data do evento 
        $eventDate = Event::where('id', $id)->where('account_id', $request->account_id)->select('date_event')->first();
        $eventDate->date_event;

        //items do estoque
        $stocks = Stock::where('status', true)
            ->where('type', 'general')
            ->get();

        foreach ($stocks as $stock) {
            $stockTotalDay = EventStockItems::where('account_id', $request->account_id)->where('date_event', $eventDate->date_event)->where('stock_id', $stock->id)->count();

            $stockAvailableTotalDay = $stock->quantity - $stockTotalDay;

            if ($stockAvailableTotalDay > 0) {
                array_push($items, ['id' => $stock->id, 'name' => $stock->name, 'totalItemDay' => $stockAvailableTotalDay]);
            }
        }

        return $items;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/stocks/');
            $image->move($imagePath, $imageName);

            Stock::where('id', $id)
                ->update([
                    'code' => $request->code,
                    'name' => $request->name,
                    'quantity' => $request->quantity,
                    'image' => '/stocks/' . $imageName,
                    'formula' => $request->formula,
                    'status' => $request->status ? 1 : 0,
                    'category_id' => $request->category_id,
                ]);
        } else {
            Stock::where('id', $id)
                ->update([
                    'code' => $request->code,
                    'name' => $request->name,
                    'quantity' => $request->quantity,
                    'formula' => $request->formula,
                    'status' => $request->status ? 1 : 0,
                    'category_id' => $request->category_id,
                ]);
        }

        return ['status' => 'success'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::where('id', $id);

        $stock->delete();

        return ['status' => 'success'];
    }

    public function updateFile(Request $request, $id)
    {
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/stocks/');
            $image->move($imagePath, $imageName);

            Stock::where('id', $id)
                ->update([
                    'code' => $request->code,
                    'name' => $request->name,
                    'quantity' => $request->quantity,
                    'image' => '/stocks/' . $imageName,
                    'formula' => $request->formula,
                    'status' => $request->status ? 1 : 0,
                ]);
        } else {
            Stock::where('id', $id)
                ->update([
                    'code' => $request->code,
                    'name' => $request->name,
                    'quantity' => $request->quantity,
                    'formula' => $request->formula,
                    'status' => $request->status ? 1 : 0,
                ]);
        }

        return ['status' => 'success'];
    }
}
