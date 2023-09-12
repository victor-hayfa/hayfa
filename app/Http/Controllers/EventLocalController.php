<?php

namespace App\Http\Controllers;

use App\EventLocal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class EventLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return EventLocal::all();
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
        $eventLocal = new EventLocal;

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = storage_path('public/eventLocal/');
            $file->move($filePath, $fileName);
            $eventLocal->file = '/eventLocal/' . $fileName;
        }

        $eventLocal->name = $request->name;
        $eventLocal->description = $request->description;
        $eventLocal->status =  $request->status ? 1 : 0;

        $eventLocal->save();

        return ['status' => 'success'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EventLocal  $eventLocal
     * @return \Illuminate\Http\Response
     */
    public function show(EventLocal $eventLocal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EventLocal  $eventLocal
     * @return \Illuminate\Http\Response
     */
    public function edit(EventLocal $eventLocal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EventLocal  $eventLocal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = storage_path('public/eventLocal/');
            $file->move($filePath, $fileName);

            EventLocal::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'file' => '/eventLocal/' . $fileName,
                    'status' => $request->status,
                ]
            );
        } else {
            EventLocal::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                ]
            );
        }

        return ['status' => 'success'];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $eventLocal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventLocal = EventLocal::where('id', $id);

        $eventLocal->delete();

        return ['status' => 'success'];
    }

    public function updateFile(Request $request, $id)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $filePath = storage_path('public/eventLocal/');
            $file->move($filePath, $fileName);

            EventLocal::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'file' => '/eventLocal/' . $fileName,
                    'status' => $request->status,
                ]
            );
        } else {
            EventLocal::where('id', $id)
            ->update(
                [
                    'name' => $request->name,
                    'description' => $request->description,
                    'status' => $request->status,
                ]
            );
        }

        return ['status' => 'success'];
    }

    public function download($id)
    {
        // Encontre o EventLocal pelo ID
        $eventLocal = EventLocal::findOrFail($id);

        // Verifique se o arquivo PDF existe
        $pdfPath = storage_path().'/app'.$eventLocal->file;

        // Faça o download do arquivo
        return response()->download($pdfPath, null, [
            'Content-Type' => 'application/pdf',
        ]);        
    }
}
