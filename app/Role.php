<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'role_id';

    /**
     * one to Many relationship with User.
     *  @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'user_role', 'role_id');
    }
    /**
     * get the role Id by role name
     * @param string $roleName
     * @return int
     */
    public static function getRoleIdByName($roleName)
    {
        return Role::where('role_name', $roleName)->pluck('role_id')->first();
    }
}
