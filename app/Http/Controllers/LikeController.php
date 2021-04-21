<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    // Create a new Auth Controller Instance
    public function __construct()
    {
        $this->middleware('JWT');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function index()
    // {
    //     //
    // }

    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            // 'user_id' => auth()->id()
            'user_id' => '1'
        ]);
    }

    public function unLikeIt(Reply $reply)
    {
        // $user_id = auth()->id();
        $user_id = '1';
        $reply->like()->where('user_id', $user_id)->first()->delete();
    }

   
}
