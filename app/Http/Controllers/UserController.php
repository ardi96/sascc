<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('scc.user-list',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scc.user-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'roleid' => "1",
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'avatar' => 'images/default-avatar.jpg',
            'mobileno' => $request->get('mobileno'),
            'locked'=> $request->get('locked'),
        ]);

        return redirect()->route('users.index')->with('msg','User successfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('scc.user-view',['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('scc.user-edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email'],
        // ]);

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->locked = $request->get('locked');

        // if ($request->file('avatar')) {
        //     $avatar = $request->file('avatar');
        //     $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
        //     $avatarPath = public_path('/images/');
        //     $avatar->move($avatarPath, $avatarName);
        //     $user->avatar = '/images/' . $avatarName;
        // }

        $user->update();

        if ($user) {
            return redirect()->route('users.index')->with('msg','User succcessfully updated');

            // Session::flash('message', 'User Details Updated successfully!');
            // Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            // Session::flash('message', 'Something went wrong!');
            // Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
