<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Memo;
use App\Models\Qestion;

class Curriculum extends Model
{
    use HasFactory;
    
    public function users()   
    {
        return $this->hasMany(User::class);  
    }
    
    public function memos()   
    {
        return $this->hasMany(Memo::class);  
    }
    
    public function questions()   
    {
        return $this->hasMany(Qestion::class);  
    }
}
