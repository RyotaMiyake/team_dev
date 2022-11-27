<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;
use App\Models\User;
use App\Models\Curriculum;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;

class MemoController extends Controller
{
    public function index(Memo $memo)
    {
        return view('memos/index')->with(['memos' => $memo->get()]);
    }

    public function show(Memo $memo)
    {
        return view('memos/show')->with(['memo' => $memo]);
    }

    public function create(Curriculum $curriculum)
    {
        return view('memos/create')->with(['curricula' => $curriculum->get()]);
    }

    public function store(Memo $memo, Request $request)
    {
        $memo->curriculum_id=$request['memo']['curriculum_id'];
        $memo->title=$request['memo']['title'];
        $memo->body=$request['memo']['body'];
        $memo->user_id=Auth::user()->id;
        $memo->save();
        return redirect('/memos/' . $memo->id);
    }

    public function edit(Memo $memo)
    {
        return view('memos/edit')->with(['memo' => $memo]);
    }

    public function update(Request $request, Memo $memo)
    {
        $input_memo = $request['memo'];
        $memo->fill($input_memo)->save();

        return redirect('/memos/' . $memo->id);
    }
}
