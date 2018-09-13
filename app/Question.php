<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends BaseModel
{
	public $timestamps = true;
	protected $fillable = [
        'slug',
        'content_ar',
        'content_en',
        'option_d_ar',
        'option_d_en',
        'option_i_ar',
        'option_i_en',
        'option_s_ar',
        'option_s_en',
        'option_c_ar',
        'option_c_en',
        'quiz_type',
    ];

    protected $rules = [
    ];

    protected $messages = [
        
    ];
}
