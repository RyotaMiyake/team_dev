<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Curriculum;

class Memo extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'curriculum_id',
        'title',
        'body',
    ];
    
    public function comments()   
    {
        return $this->hasMany(Comment::class);  
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
