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

    public function users(){
        return $this->hasMany('App\User','user_role','role_id');
    }

}
