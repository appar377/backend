<?php

namespace App\Http\Controllers;

use App\Models\Loginuser;
use Illuminate\Http\Request;

class LoginuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Loginuser::all();
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
        $item = Loginuser::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoginUser  $loginUser
     * @return \Illuminate\Http\Response
     */
    public function show(Loginuser $loginuser)
    {
        $item = Loginuser::find($loginuser);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoginUser  $loginUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loginuser $loginuser)
    {
        $update = [
            'message' => $request->message,
            'url' => $request->url
        ];
        $item = Loginuser::where('id', $loginuser->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoginUser  $loginUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loginuser $loginuser)
    {
        $item = Loginuser::where('id', $loginuser->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
