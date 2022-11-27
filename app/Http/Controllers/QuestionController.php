<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Http\Requests\QuestionRequest;
use Cloudinary;


class QuestionController extends Controller
{
    
    public function index(Question $question)
    {
        
        return view('questions/index')->with(['questions'=> $question->getPaginateByLimit()]);
        
        
    }
    
    public function show(Question $question)
    {
       return view('questions/show')->with(['questions'=> $question]);
       "test";
    }
    
    public function create(Question $question)
    {
        return view('questions/create')->with(['questions' => $question -> get()]);
    }
    
    public function store(QuestionRequest $request, Question $question)
    {
        $input = $request['question'];
        $img = $request->file('image_url');
        if ($img != null){
            $question['image_url'] = Cloudinary::upload($img->getRealPath())->getSecurePath();
        }
        $question->fill($input)->save();
        return redirect('/questions/'.$question->id);
    }
    
    public function edit(Question $question)
    {
        return view('questions/edit')->with(['questions'=> $question]);
    }
    
    public function update(QuestionRequest $request, Question $question)
    {
        $input =$request['question'];
        $question->fill($input)->save();
        return redirect('questions/'.$question->id);
    }
    
    public function delete(Question $question)
    {
        $question->delete();
        return redirect('/');
    }
    
    //
}
