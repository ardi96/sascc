<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    /**
     * index */
    function index()
    {

        $users = User::all();

        return view('contacts',['contacts' => $users]);
    }
}
