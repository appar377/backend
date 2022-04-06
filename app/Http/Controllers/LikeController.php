<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Share;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Like::all();
        return response()->json([
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        $user_id = $user->id;

        $param = [
            'user_id' => $user_id,
            'share_id' => $request->share_id,
        ];
        $get_query = Like::where([
            ['user_id',$user_id],
            ['share_id',$request->share_id]
            ])->first();


        if($get_query){
            $item = Like::where([
                ['user_id', $user_id],
                ['share_id', $request->share_id]
            ])->delete();

            $share = Share::find($request->share_id)->first();

            $like_count = $share->like_count;

            $like_count--;

            $update = [
                'like_count' => $like_count,
            ];

            Share::where('id',$request->share_id)->update($update);

            
        } else {
            $item = Like::create($param);

            $share = Share::find($request->share_id)->first();

            $like_count = $share->like_count;
            
            $like_count++;

            $update = [
                'like_count' => $like_count,
            ];

            $item = Share::where('id', $request->share_id)->update($update);
        }

        return response()->json([
            'data' => $item
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Like $like)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Like  $like
     * @return \Illuminate\Http\Response
     */
    public function destroy(Like $like)
    {
        //
    }
}
