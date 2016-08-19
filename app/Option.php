<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer', 'correct'
    ];
    public $timestamps = false;

    public function question(){
        return $this->belongsTo('App\Question', 'questionId');
    }
}
