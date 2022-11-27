<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Qestion;

class Answer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'answer',
        'user_id',
        'question_id',
        'image_url'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function question()
    {
        return $this->belongsTo(User::class);
    }
}
