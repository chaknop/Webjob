<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Job;
use \App\Category;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
class JobController extends Controller
{
    //
    //
    public function getList(){
        $posts = Job::orderBy('id', 'desc')->get();
    	return view('admin.job.list_post', compact('posts'));
    }

    public function getPost(){
    	return view('admin.job.form_post');
    }
  
    public function AddPost(Request $req){
        $validator = Validator::make($req->all(), [
            'title' => 'required',                     
        ]);
        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $aJob = new Job;
        $aJob->title = $req->title;
        $aJob->publish_language = $req->publish_language;
        $aJob->pax_no = $req->no_of_vacancy;
        $aJob->category_id = $req->function;        
        $aJob->agent_id = $req->industry;        
        $aJob->province_id = $req->province;        
        $aJob->salary_id = $req->nigotiable;
        $aJob->publish_date = $req->publish_date;
        $aJob->close_date = $req->close_date;
        $aJob->d_description = $req->d_description;
        $aJob->job_level_id = $req->job_level;
        $aJob->job_type_id = $req->jobtype;        
        $aJob->experience = $req->expereince;
        $aJob->qualifications = $req->qualifications;
        $aJob->language = $req->language;
        $aJob->language_level = $req->language_level;
        $aJob->gender = $req->gender;
        $aJob->marital = $req->marital;
        $aJob->age_from = $req->age_from;
        $aJob->age_to = $req->age_to;        
        $aJob->r_description = $req->r_description;
        $aJob->field_of_study = $req->field_of_study;
        $aJob->pdf_file = $req->contact;
        $aJob->contact_person = $req->contact_person;
        $aJob->phone = $req->phone;
        $aJob->email = $req->email;
        $aJob->website = $req->website;
        $aJob->address = $req->address;
        $aJob->user_id = \Auth::user()->id;
        if($aJob->save()){
           // return $req->all();
            return back()->with('message', 'Published');
        }
    }

    public function getEditPost($id){
        $post = Job::find($id);
        return view('admin.job.form_edit_post', compact('post'));
    }

    public function updatePost(Request $req){
        
        $validator = Validator::make($req->all(), [
            'title' => 'required',                     
        ]);
        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $aJob = Job::find($req->id);
        $aJob->title = $req->title;
        $aJob->publish_language = $req->publish_language;
        $aJob->pax_no = $req->no_of_vacancy;
        $aJob->category_id = $req->function;        
        $aJob->agent_id = $req->industry;        
        $aJob->province_id = $req->province;        
        $aJob->salary_id = $req->nigotiable;
        $aJob->publish_date = $req->publish_date;
        $aJob->close_date = $req->close_date;
        $aJob->d_description = $req->d_description;
        $aJob->job_level_id = $req->job_level;
        $aJob->job_type_id = $req->jobtype;        
        $aJob->experience = $req->expereince;
        $aJob->qualifications = $req->qualifications;
        $aJob->language = $req->language;
        $aJob->language_level = $req->language_level;
        $aJob->gender = $req->gender;
        $aJob->marital = $req->marital;
        $aJob->age_from = $req->age_from;
        $aJob->age_to = $req->age_to;        
        $aJob->r_description = $req->r_description;
        $aJob->field_of_study = $req->field_of_study;
        $aJob->pdf_file = $req->contact;
        $aJob->contact_person = $req->contact_person;
        $aJob->phone = $req->phone;
        $aJob->email = $req->email;
        $aJob->website = $req->website;
        $aJob->address = $req->address;
        $aJob->user_id = \Auth::user()->id;
        if($aJob->save()){
            return back()->with('message', 'Update Success');
        }
    }

    public function Delete(Request $req){
        if (Post::find($req->dataId)->delete()) {
            return response()
                ->json(['message' => $req->dataId, 'status' => 1]);
        }
    }

    public function getCategory(){
        $getCat = Category::paginate(8);
        return view('admin.category.categoryList', compact('getCat'));
    }

    public function getAppCategory(){
        $cat = Category::orderBy('id', 'desc')->get();
        return response()->json($cat);
    }

    public function addCategory(Request $req){
        if(!Category::checkCategory($req->title)){
            $addCat = new Category;
            $addCat->title = $req->title;
            $addCat->user_id = \Auth::user()->id;
            $addCat->slug = str_slug($req->title);
            $addCat->details = $req->details;
            if ($addCat->save()) {
                return response()->json(['message' => 'success']);
            }    
        }else{
            return response()->json(['message' => 'Name already Exiting !']);
        }
    }
    
    public function EditCategory(Request $req){
        if(!Category::checkCategory($req->title)){
            $addCat = Category::find($req->eid);
            $addCat->title = $req->title;
            $addCat->user_id = \Auth::user()->id;
            $addCat->slug = str_slug($req->title);
            $addCat->details = $req->details;       
            if( $addCat->save() ){            
                return redirect('admin/category')->with('message', 'Update Category Successfully');
            }
        }else{
            return redirect('admin/category')->with('message', 'Name already Exiting !');
        }
    }

    public function catDelete(Request $req){

        if (Category::find($req->dataId)->delete()) {
            return response()->json(['message' => 'Delete Success']);
        }
    }

}
