<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Curriculum;
use App\Models\Answer;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'question',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
}

    
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
