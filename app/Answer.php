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
        'dick_question_id'
    ];
    public function quiz()
    {
        return $this->belongsTo('App\User');
    }

    public function dics_question()
    {
        return $this->belongsTo('App\DiscQuestion');
    }
}
