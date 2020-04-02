<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    public $timestamps = false;
     /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'opt_id';

    public function department()
    {
        return $this->belongsTo('App\Department', 'dept_id', 'opt_id');
    }

    public function students()
    {
        return $this->hasMany('App\Student', 'opt_id', 'opt_id');
    }


}
