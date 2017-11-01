<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    protected $table = 'tbl_jobs';


	// public function users(){
	//     //return $this->hasMany('App\User');
	//     // return $this->belongsTo('App\User');
	//     return $this->belongsTo('App\User');
	//     return $this->belongsTo('App\Post');
	//     // return $this->hasMany('App\User');
	// }
	public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
}
