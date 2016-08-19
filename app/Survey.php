<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User', 'userId');
    }

    public function questions(){
        return $this->hasMany('App\Question', 'questionId');
    }
}
