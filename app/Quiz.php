<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends BaseModel
{
	protected $fillable = [
        'slug',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    
}
