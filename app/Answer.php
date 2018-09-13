<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends BaseModel
{
	protected $fillable = [
        'slug',
        'most',
        'least',
        'quiz_id',
        'question_id'
    ];
    public function quiz()
    {
        return $this->belongsTo('App\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
