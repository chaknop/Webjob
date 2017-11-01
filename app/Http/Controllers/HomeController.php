<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHomePage(){
    	return view('layout.frontEnd');
    }
     public function getSinglePage(){
     	return view('frontEnd.single-page');
    	
    }
    public function getMonitor(){
    	
    }
}
