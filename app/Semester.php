<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    //
    public $timestamps = false;
     /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'sem_id';

    public function students()
    {
        return $this->hasMany('App\Student', 'sem_id', 'sem_id');
    }
}
