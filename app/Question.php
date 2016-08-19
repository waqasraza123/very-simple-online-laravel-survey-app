<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question', 'surveyId'
    ];
    public $timestamps = false;

    public function survey(){
        return $this->belongsTo('App\Survey', 'surveyId');
    }

    public function options(){
        return $this->hasMany('App\Option', 'questionId');
    }

    public function responses(){
        return $this->hasMany('App\Response', 'questionId');
    }
}
