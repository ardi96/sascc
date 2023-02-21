<?php

namespace App\Http\Controllers;

use App\Models\ClientDocument;
use App\Http\Requests\StoreClientDocumentRequest;
use App\Http\Requests\UpdateClientDocumentRequest;

class ClientDocumentController extends Controller
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
     * @param  \App\Http\Requests\StoreClientDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientDocument  $clientDocument
     * @return \Illuminate\Http\Response
     */
    public function show(ClientDocument $clientDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientDocument  $clientDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientDocument $clientDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientDocumentRequest  $request
     * @param  \App\Models\ClientDocument  $clientDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientDocumentRequest $request, ClientDocument $clientDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientDocument  $clientDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientDocument $clientDocument)
    {
        //
    }
}
