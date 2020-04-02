<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public $timestamps = false;
     /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'dept_id';

    public function options()
    {
        return $this->hasMany('App\Option', 'dept_id', 'dept_id');
    }

    public function students()
    {
        return $this->hasMany('App\Student', 'dept_id', 'dept_id');
    }

}
