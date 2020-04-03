<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'news_id';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'news_date',
    ];


    public function author()
    {
        return $this->belongsTo('App\User', 'user_id', 'user_id');
    }
}
