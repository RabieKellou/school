<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    const ADMIN_ROLE = 1;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_cin', 'user_role', 'fname', 'lname', 'email', 'address', 'password', 'dob', 'doj', 'gender', 'social_status', 'phone',
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

    /**
     * One to Many relationship with Role.
     *  @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'user_role');
    }

    /**
     * one to one relationship with Student.
     *  @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function student()
    {
        return $this->hasOne('App\Student', 'std_id', 'user_id');
    }

    /**
     * one to many relationship with News.
     *  @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany('App\News', 'user_id', 'user_id');
    }


    /**
     * get the fullName of a user.
     *  @return string
     */
    public function fullName()
    {
        return $this->fname . ' ' . $this->lname;
    }

    /**
     * check if a user is an admin
     *  @return bool
     */
    public function isAdmin()
    {
        return  $this->user_role === Role::getRoleIdByName('admin');
    }
    /**
     * check if a user has a specefic role
     * @param string $roleName
     *  @return bool
     */
    public function hasRole($roleName)
    {
        return  $this->user_role === Role::getRoleIdByName($roleName);
    }
}
