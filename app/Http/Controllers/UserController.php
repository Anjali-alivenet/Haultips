<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $users = new User();

            $users->first_name = $request->f_name;
            $users->last_name = $request->l_name;
            $users->email = $request->email;
            $users->password = bcrypt($request->password);
            $users->mobile = $request->mobile;
            $users->role_master_id = 2;
            $users->address = $request->address;
            $users->save();

            $data['responceMessage'] = 'You have registered successfully';
            $data['responceCode'] = '200';

        }

        catch (Exception $e){

            $data['responceMessage'] = 'Something went wrong';
            $data['responceCode'] = '0';
        }


        echo json_encode($data);
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

    public function checkEmail(Request $request){

        $email = $request->email;

        $users= User::where('email',$email)->first();

        if ($users)
        {
            echo 'false';
        }
        else
        {
            echo 'true';
        }
    }
}
