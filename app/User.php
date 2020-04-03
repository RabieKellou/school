<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_cin','user_role','fname','lname', 'email','address', 'password','dob','doj','gender','social_status','phone',
    ];

     /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->hasOne('App\Role','role_id','user_role');
    }

    public function student(){
        return $this->hasOne('App\Student','std_id','user_id');
    }

    public function news()
    {
        return $this->hasMany('App\News', 'user_id', 'user_id');
    }
}
