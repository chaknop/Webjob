<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    //
    protected $table = 'tbl_language';

    // select level of language
    public static function getLevel (){
    	return \DB::table('tbl_english_level')->get();
    	// return self::all();
    }

    // select gender
    // public static function getLevel (){
    // 	return \DB::table('tbl_english_level')->get();
    // 	// return self::all();
    // }
}
