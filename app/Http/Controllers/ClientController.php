<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.control de clientes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.control de clientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('stop');
        $client = new Client();

        $this->validate($request(),
            [
                'CI' => 'required  | unique:clients | digits_between: 7, 8',
                'firtName' => 'required',
                'lastName' => 'required',
                'email' => 'required | email',
                'address' => 'required',
                'phoneNumber' => 'required | numeric',
            ]
        );

        $client->CI = $request->get('CI');
        $client->firstName = $request->get('firstName');
        $client->lastName = $request->get('lastName');
        $client->email = $request->get('email');
        $client->address = $request->get('address');
        $client->phoneNumber = $request->get('phoneNumber');
        dd($client);

        $client->save();
        return view('client.store');
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
        //
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
        //
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
