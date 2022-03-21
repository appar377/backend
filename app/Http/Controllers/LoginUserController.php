<?php

namespace App\Http\Controllers;

use App\Models\LoginUser;
use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = LoginUser::all();
        return response()->json([
            'data' => $items
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoginUser  $loginUser
     * @return \Illuminate\Http\Response
     */
    public function show(LoginUser $loginUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoginUser  $loginUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoginUser $loginUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoginUser  $loginUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoginUser $loginUser)
    {
        //
    }
}
