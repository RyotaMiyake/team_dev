<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Admission;
use App\Models\Curriculum;
use App\Models\Comment;
use App\Models\Answer;
use App\Models\Memo;
use App\Models\Question;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function memos()   
    {
        return $this->hasMany(Memo::class);  
    }
    
    public function comments()   
    {
        return $this->hasMany(Comment::class);  
    }
    
    public function questions()   
    {
        return $this->hasMany(Question::class);  
    }
    
    public function answers()   
    {
        return $this->hasMany(Answer::class);  
    }
    
    public function admission()
    {
        return $this->belongsTo(Admission::class);
    }
    
    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
