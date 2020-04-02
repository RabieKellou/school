<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public $timestamps = false;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'std_id';

      /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    public function user(){
        return $this->belongsTo('App\User','std_id','user_id');
    }

    public function semester()
    {
        return $this->belongsTo('App\Semester', 'sem_id', 'sem_id');
    }

    public function option()
    {
        return $this->belongsTo('App\Option', 'opt_id', 'opt_id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'dept_id', 'dept_id');
    }

}
