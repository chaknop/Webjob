@extends('layout.backend')
@section('program')
active
@endsection
@section('title')
Job - Create New Job
@endsection
@section('content')
<div class="wrapper">
	@include('admin.include.header')
    @include('admin.include.leftMenu')
	<div class="content-wrapper">
	    <section class="content row">
	    	@if (count($errors) > 0)
			<div class="col-md-12">
				<div class="alert alert-warning" style="background-color: none; ">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif
    		<div class="col-md-12">
    			@if(session('message'))
    				<div class="alert alert-warning alert-dismissible show" role="alert">
    					<strong> {{ session('message')}} <strong>
    					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
    			@endif
    		</div><div class="clear"></div>
    		<div class="box-header">			
		       <h3>Add New Job </h3>			  
		    </div>    		
	    	<form method="POST" action="{{route('addJob')}}" enctype="multipart/form-data">
	    		{{ csrf_field() }}
				<section class="col-md-12 connectedSortable">
					<!-- Job description -->
					<div class="box">
					  	<div class="panel panel-info">
							<div class="box-header">
				            	<div class="pull-right box-tools">
				                	<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
				              	</div>
				              	<h3 class="box-title">Job Description</h3>				            
						    </div>
							<div class="row">						    
							    <div class="box-body">
							      	<div class="col-md-12 col-md-12">		                   
				                    	<div class="form-group">
				                            <input type="text" id="title" name="title" class="form-control input-md" placeholder="Job Title" required value="{{ old('title')}}">
				                        </div>		                            
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                               <select class="form-control" id="publish_language" name="publish_language" style="text-transform: capitalize;">
					                               		<option value="">Publish Language</option>
					                               		@foreach(\App\Language::orderBy('name', 'asc')->get() as $lang)
					                               		<option value="{{$lang->id}}">{{$lang->name}}</option>
					                               		@endforeach
					                               </select>
					                            </div>
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                              	<input type="text" class="form-control" name="no_of_vacancy" id="no_of_vacancy" placeholder="No. Of Vacancies" value="{{ old('no_of_vacancy')}}">
					                            </div>                
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                               <select class="form-control" id="function" name="function" style="text-transform: capitalize;">
					                               		<option value="">Function</option>
					                               		@foreach(\App\Category::orderBy('title', 'asc')->get() as $lang)
					                               		<option value="{{$lang->id}}">{{$lang->title}}</option>
					                               		@endforeach
					                               </select>
					                            </div>
				                            </div>
				                        </div>	
				                        <div class="row">         
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                                <div class="form-group">
					                                <select class="form-control" id="industry" name="industry" style="text-transform: capitalize;">
					                               		<option value="">Industry</option>
					                               		@foreach(\App\Agent::orderBy('industry', 'asc')->get() as $ind)
					                               		<option value="{{$ind->id}}">{{$ind->industry}} </option>
					                               		@endforeach
					                               </select>
				                                </div>
				                            </div>			                       
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                               <select class="form-control" id="province" name="province" style="text-transform: capitalize;">
					                               		<option value="">Location</option>
					                               		@foreach(\App\Province::orderBy('province_name', 'asc')->get() as $loc)
					                               	<option value="{{$loc->id}}">{{$loc->province_name}}</option>
					                               		@endforeach
					                               </select>
					                            </div>
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                                <div class="form-group">
					                                <select class="form-control" id="nigotiable" name="nigotiable" style="text-transform: capitalize;">
					                               		<option value="">Nigotiable</option>
					                               		@foreach(\App\Salary::all() as $sal)
					                               		<option value="{{$sal->id}}">{{$sal->price}}</option>
					                               		@endforeach
					                               </select>
				                                </div>
				                            </div>
				                        </div>	   
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                            	<div class="input-group date">	
									                  	<div class="input-group-addon">
									                    	<i class="fa fa-calendar"></i>
									                  	</div>
									                  	<input type="text" class="form-control " id="from" name="publish_date" placeholder="Publish Date">
								                  	</div>
								                </div>
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                                <div class="form-group">
				                                	<div class="input-group ">
									                  	<div class="input-group-addon">
									                    	<i class="fa fa-calendar"></i>
									                  	</div>
									                  	<input type="text" class="form-control " id="to" name="close_date" placeholder="Close Date">
								                  	</div>
								                </div>
				                            </div>
				                        </div>                         
				                      	<div class="form-group">
				                      		<div class="row" style="padding: 4px;">
				                            	<div class="box-body">
				                            		<label>Description</label>
									                <textarea name="d_description" class="form-control myText">{!! old('d_description')!!}</textarea>
									            </div>
								            </div>
				                        </div>
					                </div>        
							  	</div>
						  	</div>		
						</div>		  
				  	</div>
				  	<!-- Job Requirement  -->
				  	<div class="box">
					  	<div class="panel panel-info">
							<div class="box-header">
				            	<div class="pull-right box-tools">
				                	<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
				              	</div>
				              	<h3 class="box-title">Job Requirement</h3>	
						    </div>
							<div class="row">						    
							    <div class="box-body">
							      	<div class="col-md-12 col-md-12">	
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                               <select class="form-control" id="job_level" name="job_level" style="text-transform: capitalize;">
					                               		<option value="">Job Level</option>
					                               		@foreach(\App\JobLevel::orderBy('name', 'asc')->get() as $lang)
					                               		<option value="{{$lang->id}}">{{$lang->name}}</option>
					                               		@endforeach
					                               </select>
					                            </div>
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                            	<select class="form-control" id="jobtype" name="jobtype" style="text-transform: capitalize;">
					                               		<option value="">Job Type</option>
					                               		@foreach(\App\JobType::orderBy('title', 'asc')->get() as $jtype)
					                               		<option value="{{$jtype->id}}">{{$jtype->title}}</option>
					                               		@endforeach
						                            </select>	
					                            </div>		                            
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
								                  	<input type="expereince" class="form-control" id="expereince" name="expereince" placeholder="Min. Year of Exp.: " value="{{old('expereince')}}">
					                            </div>
				                            </div>
				                        </div>	
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                                <div class="form-group">
					                                <select class="form-control" id="qualifications" name="qualifications" style="text-transform: capitalize;">
					                               		<option value="">Qualification</option>
					                               		@foreach(\App\Qualification::orderBy('name', 'asc')->get() as $qual)
					                               		<option value="{{$qual->id}}">{{$qual->name}}</option>
					                               		@endforeach
					                               </select>
				                                </div>
				                            </div>			                       
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                               <select class="form-control" id="language" name="language" style="text-transform: capitalize;">
					                               		<option value="">Language</option>
					                               		@foreach(\App\Language::orderBy('name', 'asc')->get() as $lang)
					                               		<option value="{{$lang->id}}">{{$lang->name}}</option>
					                               		@endforeach
					                               </select>
					                            </div>
				                            </div>				                            
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                                <div class="form-group">
					                                <select class="form-control" id="language_level" name="language_level" style="text-transform: capitalize;">
					                               		<option value="">Level</option>
					                               		@foreach(\App\Language::getLevel() as $level)
					                               		<option value="{{$level->id}}">{{$level->name}}</option>
					                               		@endforeach
					                               </select>
				                                </div>
				                            </div>
				                        </div>	
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="form-group">
					                               <select class="form-control" id="gender" name="gender" style="text-transform: capitalize;">
					                               		<option value="">Please Select</option>
					                               		<option value="1">Male</option>
					                               		<option value="2">Female</option>
					                               </select>
					                            </div>
				                            </div>	
				                           	<div class="col-xs-12 col-sm-4 col-md-4">
					                            <div class="form-group">
								                  <select name="marital" id="marital" class="form-control">
								                  		<option value="">Marital</option>
								                  		<option value="1">Single</option>
								                  		<option value="2">marrired</option>
								                  	</select>
								                </div>
				                            </div>
				                            <div class="col-xs-12 col-sm-4 col-md-4">
				                            	<div class="row">
					                            	<div class="col-xs-12 col-sm-6 col-md-6">
						                                <div class="form-group">
							                              	<input type="text" name="age_from" id="age_from" class="form-control" placeholder="Age: from" value="{{old('age_from')}}">
						                                </div>
						                            </div>
						                            <div class="col-xs-12 col-sm-6 col-md-6">
						                                <div class="form-group">
							                              	<input type="text" name="age_to" id="age_to" class="form-control" placeholder="Age: To" value="{{old('age_to')}}">
						                                </div>
						                            </div>
					                            </div>
				                            </div>	
				                            <div class="col-xs-12 col-sm-8 col-md-8">
				                                <div class="form-group">
					                               <textarea class="form-control" name="field_of_study" rows="3" placeholder="Field Of Study ..."></textarea>
				                                </div>
				                            </div>			                            
				                        </div>                  
				                      	<div class="form-group">
				                      		<div class="row" style="padding: 4px;">
				                            	<div class="box-body">
				                            		<label>Requirement Details</label>
									                <textarea name="r_description" class="form-control myText">{!! old('r_description') !!}</textarea>
									            </div>
								            </div>
				                        </div>
					                </div>        
							  	</div>
						  	</div>				  
					  	</div>
				  	</div>
				  	<div class="box">
					  	<div class="panel panel-info">
							<div class="box-header">
				            	<div class="pull-right box-tools">
				                	<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
				              	</div>
				              	<h3 class="box-title">Contact Information</h3>				            
						    </div>
							<div class="row">						    
							    <div class="box-body">
							      	<div class="col-md-12 col-md-12">	
				                        <div class="row">
				                        	<div class="col-xs-12 col-sm-3 col-md-3">
					                        	<div class="form-group">
						                            <input type="text" id="title" name="contact_person" class="form-control input-md" placeholder="Contact Person" required value="{{old('contact_person')}}">
						                        </div>	
						                    </div>
											<div class="col-xs-12 col-sm-3 col-md-3">
				                            	<div class="form-group">
				                            		<input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="{{ old('phone')}}"> 
					                            </div>
				                            </div>
				                            <div class="col-xs-12 col-sm-3 col-md-3">
				                            	<div class="form-group">
					                              <input type="email" name="email" class="form-control" placeholder="Email: example@gmail.com" value="{{old('email')}}">
					                            </div>	                    
				                            </div>
				                            <div class="col-xs-12 col-sm-3 col-md-3">
				                            	<div class="form-group">
					                              <input type="text" name="website" class="form-control" placeholder="Website Ex: http://www.google.com" value="{{old('website')}}">
					                            </div>                    
				                            </div>
				                        </div>			       
				                        <div class="row">
				                        	<div class="col-md-12">
								               	<textarea name="address" class="form-control myText" placeholder="Address:">{!! old('address') !!}</textarea>	
								            </div>
				                        </div>	 
				                        <br>
				                        <input type="submit" name="btnbl" value="Publish" class="btn btn bg-olive">
					                </div>        
							  	</div>
						  	</div>				  
					  	</div>
					</div>
				</section>   
			</form>
	    </section>
	</div>
</div>
@endsection
