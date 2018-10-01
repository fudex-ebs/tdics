<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends BaseModel
{
	protected $fillable = [
        'slug',
        'quizmaster_id',
        'examiner_id',
        'type',
        'used'
    ];
    public function examiner()
    {
        return $this->belongsTo('App\User','examiner_id');
    }
    public function quizmaster()
    {
        return $this->belongsTo('App\User','quizmaster_id');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    
}
