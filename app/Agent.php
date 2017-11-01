<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $table = 'tbl_agent';


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
