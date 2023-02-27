<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientAdvance;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreClientAdvanceRequest;
use App\Http\Requests\UpdateClientAdvanceRequest;

class ClientAdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::find(Auth::user()->client_id);

        
        $advance = null;

        return view('client.advance-list',['advance' => $advance]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $client = Auth::user()->client;
        
        return view('client.advance-create',['client' => $client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientAdvanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientAdvanceRequest $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientAdvance  $clientAdvance
     * @return \Illuminate\Http\Response
     */
    public function show(ClientAdvance $clientAdvance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientAdvance  $clientAdvance
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientAdvance $clientAdvance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientAdvanceRequest  $request
     * @param  \App\Models\ClientAdvance  $clientAdvance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientAdvanceRequest $request, ClientAdvance $clientAdvance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientAdvance  $clientAdvance
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientAdvance $clientAdvance)
    {
        //
    }
}
