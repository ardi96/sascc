<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use App\Models\ClientDocument;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{

    /**
     * Here we upload the client's document
     */
    public function uploadClientDocument(Request $request)
    {
        $file = $request->file('filename');

        $filename = $file->hashName();

        $location = 'uploads';

        $file->move($location, $filename);

        // $client = Client::where('user_id', Auth::user()->id)->first();

        ClientDocument::create([
            'document_type_id' => $request->get('document_type'),
            'description' => $request->get('description'),
            'client_id' => Auth::user()->client->id,
            'uploaded_date' => date('Y-m-d h:i:s'),
            'status' => '1000',
            'filename' => $location.'/'.$filename,
        ]);

        return redirect('/documents');
    }

    /**
     * to show list of client's document
     */
    public function showClientDocuments()
    {

        $document_types = DocumentType::all();

        // $client_documents = ClientDocument::where('client_id',
        //                     Auth::user()->client->id)->get();

        $client_documents = DB::table('client_documents')
                            ->join('document_types','document_types.id','=','client_documents.document_type_id')
                            ->select('client_documents.*','document_types.document_name')
                            ->where('client_documents.client_id',Auth::user()->client->id)
                            ->get();

        return view('client.document-upload',[
            'document_types' => $document_types,
            'documents' => $client_documents
        ]);

    }

    /**
     * Import Clients
     */

     public function importClient(Request $request)
     {
        $file = $request->file('filename');

        $filename = $file->hashName();

        $location = 'uploads';

        $file->move($location, $filename);

        return redirect('/clients');
     }

    /**
     * Display form to upload Clients
     */
    public function showImportClientForm()
    {
        return view('scc.client-import');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('scc.client-list',['clients' => $clients]);
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
