<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Agent;
class AgentController extends Controller
{
    //

    public function getAgent(){
    	$agents = Agent::orderBy('company_name', 'ASC')->get();
    	return view('admin.agent.agentList', compact('agents'));
    }
    public function getAgentForm(){
    	return view('admin.agent.agentForm');
    }

    public function createAgent(Request $req){
    	if ($req->hasFile('image')) {
            $image     = $req->file('image');
            $filename  = time().'-'.$image->getClientOriginalName();
        }else{
            $filename = "";
        }
    	$agnt = new Agent;
    	$agnt->title = $req->title;
    	$agnt->industry = $req->industry;
    	$agnt->company_type = $req->company_type;
    	$agnt->location = $req->province;
    	$agnt->employee = $req->no_of_employee;
    	$agnt->contact_person = $req->contact_person;
    	$agnt->phone = $req->phone;
    	$agnt->email = $req->email;
    	$agnt->website = $req->website;
    	$agnt->address = $req->address;
    	$agnt->com_desc = $req->com_desc;
    	$agnt->image = $filename;
    	if ($agnt->save()) {
    		if ($req->hasFile('image')) {       
            	$img = Image::make($image->getRealPath())->resize(300, 200);
       			$img->save(public_path('photo/shares/thumbs/'.$filename));         
                $image->move(public_path('photos/shares/'), $filename);				
            }   
            return back()->with('message', 'Published');
    	}


    }
}
