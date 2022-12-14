<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Memo;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'user_id',
        'memo_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function memo()
    {
        return $this->belongsTo(Memo::class);
    }
}