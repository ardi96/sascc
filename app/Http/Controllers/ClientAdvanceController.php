<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
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
        $client = Client::where('user_id', Auth::user()->id)->first();

        $advances = ClientAdvance::where('client_id',$client->id)->get();

        return view('client.advance-list',['advances' => $advances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $client = Auth::user()->client;

        if ($client->status <> '4000') 
        {
            return redirect()->route('advances.index')->with('msg','Your registration is pending for approval. Salary Advance request is not possible at this moment.');
        }
        
        $advances = ClientAdvance::where('client_id', $client->id)->get();

        if ( count( $advances ) > 0 )
        {
            return redirect()->route('advances.index')->with('msg','You have active request. Salary Advance request is not possible at this moment.');
        }
        
        $advance = new ClientAdvance();

        return view('client.advance-create',['client' => $client,
                    'advance' => $advance]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientAdvanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientAdvanceRequest $request)
    {
        $request->validated();

        ClientAdvance::create([
            "client_id" => $request->get("client_id"),
            "requested_date" => $request->get("requested_date"),
            "advance_amount"=> $request->get("advance_amount"),
            "duration" => $request->get("duration"),
            "status" => "1000",
            "disbursed_amount" => 0
        ]);

        return redirect()->route('advances.index')->with('msg','Your request for advance has been created');
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
    // public function destroy(ClientAdvance $clientAdvance)
    public function destroy(Request $request)
    {

        ClientAdvance::find($request->advance)->delete();

        return redirect()->route('advances.index')->with('msg','Your advance request has been deleted.');
    }
}
