<?php

namespace App\Http\Controllers\Manager;

use App\Models\Client;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManagerHomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::where('company_id', Auth::user()->company_id)->get();

        $client_count = Client::where('company_id', Auth::user()->company_id)->count();
        $pending_count = Client::where('company_id', Auth::user()->company_id)->where('status','1000')->count();
        $recent_count = Client::where('company_id', Auth::user()->company_id)->where('status','4000')->count();

        return view('manager.index',['clients' => $clients,
                'client_count' => $client_count,
                'pending_count' => $pending_count,
                'recent_count' => $recent_count 
                ]);
    }

    public function clientView(Request $request)
    {
        $client = Client::where('company_id', Auth::user()->company_id)
                          ->where('id', $request->get('client_id'))->first();
        

        if ($client)
        {

            $company = Company::where('id', $client->value('company_id'))->first();

            return view('manager.client-view',['client' => $client,
                        'company' => $company]);
        }
        else
        {
            return redirect()->route('manager.index')->with('msg','Staff does not exist or you do not have right to view the staff');
        }
    }

    public function clientApproval(Request $request)
    {
        $client = Client::where('company_id', Auth::user()->company_id)
        ->where('id', $request->get('client_id'))->first();


        if ($client)
        {

            $client->status = '4000';

            $client->save();
            
            return redirect()->route('manager.index')->with('msg','Congratulations, your staff has been enrolled to Salary Advance Programme');
        }
        else
        {
            return redirect()->route('manager.client-view')->with('msg','You are not authorized to approve the client.');
        }
    }

    public function companyEdit(Request $request)
    {
        $company = Company::where('id', Auth::user()->company_id)->first();

        return view('manager.company-edit',['company'=>$company]);
    }

    public function companyUpdate(Request $request)
    {
        $company = Company::where('id', Auth::user()->company_id)->first();

        $company->fill($request->all());

        if ( $company->save() )
        {
            return redirect()->route('manager.index')->with('msg','Your company data have been updated.');
        }
        else
        {
            return redirect()->route('manager.index')->with('msg','Error during update your company data.');   
        }    

    }
}
