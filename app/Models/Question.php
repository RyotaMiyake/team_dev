<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Curriculum;
use App\Models\Answer;

class Qestion extends Model
{
    use HasFactory;
    
    public function answers()   
    {
        return $this->hasMany(Answer::class);  
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
