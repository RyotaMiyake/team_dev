<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;
use App\Models\User;
use App\Models\Curriculum;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Cloudinary;

class MemoController extends Controller
{
    public function index(Memo $memo)
    {
        return view('memos/index')->with(['memos' => $memo->get()]);
    }

    public function show(Memo $memo, Comment $comment)
    {
        return view('memos/show')->with(['memo' => $memo, 'comments' => $comment->get()]);
    }

    public function create(Curriculum $curriculum)
    {
        return view('memos/create')->with(['curricula' => $curriculum->get()]);
    }

    public function store(Memo $memo, Request $request)
    {
        
        $input = $request['memo'];
        $img = $request->file('image_url');
        if($img != null)
        {
            $memo['image_url'] = Cloudinary::upload($img->getRealPath())->getSecurePath();
            
        }
        
        $memo->curriculum_id=$request['memo']['curriculum_id'];
        $memo->title=$request['memo']['title'];
        $memo->body=$request['memo']['body'];
        $memo->user_id=Auth::user()->id;
        $memo->fill($input)->save();
        
        
        
        return redirect('/memos/' . $memo->id);
    }

    public function edit(Curriculum $curriculum, Memo $memo)
    {
        return view('memos/edit')->with(['curricula' => $curriculum->get(),'memo' => $memo]);
                                        
    }

    public function update(Request $request, Memo $memo)
    {
        $input = $request['memo'];
        $img = $request->file('image_url');
        if($img != null)
        {
            $memo['image_url'] = Cloudinary::upload($img->getRealPath())->getSecurePath();
            
        }
        
        $memo->curriculum_id=$request['memo']['curriculum_id'];
        $memo->title=$request['memo']['title'];
        $memo->body=$request['memo']['body'];
        $memo->user_id=Auth::user()->id;
        $memo->fill($input)->save();
        
        return redirect('/memos/' . $memo->id);
    }
    

    public function delete(Memo $memo )
    {
        $memo->delete();
        return redirect('/memo');
    }
    

    public function show_curriculum(Curriculum $curriculum, Memo $memo)
    {
        return view('memos/curriculum_index')->with([
            'memos' => $memo->get(),
            'curriculum' => $curriculum
            ]);
    }
}
