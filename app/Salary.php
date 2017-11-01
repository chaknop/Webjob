<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    //
    protected $table = 'tbl_salary';

   	public function job()
    {
        // return $this->hasMany(Job::class);
        return $this->hasMany(Job::class);
        // return $this->belongsToMany(Job::class);
        // return $this->hasManyThrough(Job::class);
    }
}
