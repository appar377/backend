<?php

namespace App\Http\Controllers;

use App\Models\Share;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Share::with('user')->get();
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
        $user = User::where('email', $request->email)->first();
        $id = $user->id;
        $param = [
            'user_id' => $id,
            'share' => $request->share,
        ];
        $item = Share::create($param);

        $items = Share::all();
        return response()->json([
            'data' => $items
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function show(Share $share, Request $request)
    {
        $item = Share::with(['user'])->where('id',$share->id)->first();

        $comment_item = Comment::where('share_id', $request->share_id)->get();
        if ($item || $comment_item) {
            return response()->json([
                'data' => $item,
                'comment' => $comment_item
            ],
                200
            );
        } else {
            return response()->json([
                'message' => 'Not found',
            ],
                404
            );
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Share $share)
    {
        $like_count = $share->like_count;

        if ($like_count == 1) {
            $like_count -= 1;
        } elseif ($like_count == 0) {
            $like_count += 1;
        }

        $update = [
            'like_count' => $like_count,
        ];

        $item = Share::where('id', $share->id)->update($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Share  $share
     * @return \Illuminate\Http\Response
     */
    public function destroy(Share $share)
    {
        $item = Share::where('id', $share->id)->delete();
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
