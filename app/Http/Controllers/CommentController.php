<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Memo;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CommentController extends Controller
{
    public function store(CommentRequest $request, Comment $comment, Memo $memo){
        $comment->comment = $request['comment']['comment'];
        $comment->user_id = Auth::user()->id;
        $comment->memo_id = $memo->id;
        
        $comment->save();
        
        return redirect('/memos/' . $comment->memo_id);
    }
}
