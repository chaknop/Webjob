<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'tbl_category';

 	public function post()
    {
        return $this->hasMany(Job::class);
    }

    public static function checkCategory($catName){
    	// return self::where($catName)->first();
    	return self::select('title')->Where('title', $catName)->first();
    }
}
