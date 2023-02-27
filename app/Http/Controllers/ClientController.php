<?php

namespace App\Http\Controllers;

use App\Rules\nric;
use App\Models\Client;
use App\Models\Company;
use App\Rules\mymobileno;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use App\Models\ClientDocument;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreClientRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateClientRequest;

class ClientController extends Controller
{


    /**
     * validator incoming request
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string','max:60'],
            'email' => ['required', 'string', 'email','max:190', 
                    Rule::unique('clients')->ignore($data['client_id'])],
            'dob' => ['required', 'date', 'before:today'],
            'mobileno' => ['required','string',
                    Rule::unique('clients')->ignore($data['client_id']),
                    new mymobileno],
            'nric' => ['required','string',
                    Rule::unique('clients')->ignore($data['client_id']),new nric],
            'address_1' => ['string','max:190'],
            'address_2' => ['string','max:190'],
            'city' => ['required','string','max:45'],
            'post_code' => ['required','string','max:99999','numeric'],
            'work_location' => ['string','max:45'],
            'salary' => ['required'],
            'company_id' => ['required'],
            'avatar' => ['image' ,'mimes:jpg,jpeg,png','max:1024'],
        ]);
    }

    /**
     * show Update Profile Form
     */

    public function showProfileUpdateForm()
    {
       
    }

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

        return redirect()->route('client.documents')->with('msg','document uploaded successfully');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $client = Auth::user()->client;

        $companies = Company::all();
        
        if ( $client )
        {
            return view('client.profile-update',[
                'client' => $client,
                'companies' => $companies]);
        }
        else
        {
            return $this->create();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request)
    {
      
       $this->validator($request->all())->validate();

       $id = $request->get("client_id");

       $client = Client::find($id);

       if ($client && Auth::user()->id == $client->user_id)
       {
            $client->name = $request->get('name');
            $client->email = $request->get('email');
            $client->dob = date('Y-m-d', strtotime($request->get('dob')));
            $client->mobileno = $request->get('mobileno');
            $client->nric = $request->get('nric');
            $client->address_1 = $request->get('address_1');
            $client->address_2 = $request->get('address_2');
            $client->city = $request->get('city');
            $client->post_code = $request->get('post_code');
            $client->city = $request->get('city');
            $client->work_location = $request->get('work_location');
            $client->salary = $request->get('salary');
            $client->company_id = $request->get('company_id');

            $client->save();

            return redirect()->route('index')->with('msg','Profile has been updated successfully');
       } 
       else 
       {
            return redirect()->route('index')->with('msg','Profile update has failed');
       }
       
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
