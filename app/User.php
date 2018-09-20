<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function created_quizzes()
    {
        return $this->hasMany('App\Quiz','quizmaster_id');
    }
    public function answered_quizzes()
    {
        return $this->hasMany('App\Quiz','examiner_id');
    }

    public function isAdmin()
    {
        return $this->role =='admin' ? true : false;
    }
}
