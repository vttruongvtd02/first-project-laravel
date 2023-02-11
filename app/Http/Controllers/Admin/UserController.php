<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('Admin.User.usermanagement', ['accounts' => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Account();
        $user->lastname = $request->input('lastname');
        $user->firstname = $request->input('firstname');
        $user->address = $request->input('address');
        $user->phone_number = $request->input('phonenumber');
        $user->email = $request->input('email');
        $user->password = md5($request->input('password'));
        // save to DB
        $user->save();

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Account::find($id);
        return view('Admin.User.edit')->with('user', $user);
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
        $user = Account::where('id', $id)
            ->update([
                'lastname' => $request->input('lastname'),
                'firstname' => $request->input('firstname'),
                'address' => $request->input('address'),
                'phone_number' => $request->input('phonenumber'),
                'email' => $request->input('email')
            ]);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Account::find($id);
        $user->delete();
        return redirect('/users');
    }
}
