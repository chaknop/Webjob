@extends('layout.backend')
@section('agent')
active
@endsection
@section('title')
	Agent - Create New
@endsection
@section('content')
<div class="wrapper">
  @include('admin.include.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.include.leftMenu')
  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <section class="content row">
    		<div class="col-md-12">
    			@if(session('message'))
    				<div class="alert alert-warning alert-dismissible show" role="alert">		
					  <strong> {{ session('message') }} <strong>
					</div>
    			@endif
    		</div>
	    	<form method="POST" action="{{route('createAgent')}}" enctype="multipart/form-data">
	    		{{ csrf_field() }}
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>Create New Client</h3>			  
					    </div>
						<div class="row">						    
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">		                   
			                    	<div class="form-group">
			                            <input type="text" id="title" name="title" class="form-control input-md" placeholder="Company Name" required>
			                        </div>		                            
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group">
				                               <select class="form-control" id="industry" name="industry" style="text-transform: capitalize;">
				                               		<option value="">Industry</option>
				                               		@foreach(\App\Category::orderBy('title', 'ASC')->get() as $cat)
				                               		<option value="{{$cat->id}}">{{$cat->title}}</option>
				                               		@endforeach
				                               </select>
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group">
				                                <input type="text" id="company_type" name="company_type" class="form-control input-md" placeholder="Company Type" >
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group">
				                                <select class="form-control" id="province" name="province" style="text-transform: capitalize;">
				                               		<option value="">Location</option>
				                               		@foreach(\App\Province::orderBy('province_name', 'ASC')->get() as $pro)
				                               		<option value="{{$pro->id}}">{{$pro->province_name}}</option>
				                               		@endforeach
				                               </select>
			                                </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group">
				                                <input type="text" id="no_of_employee" name="no_of_employee" class="form-control input-md" placeholder="No. Of Employee">
			                                </div>
			                            </div>
			                        </div>	 
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group">
				                                <input type="text" name="contact_person" id="contact_person" class="form-control" placeholder="Contact Name">
			                                </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group">
				                                <input type="text" id="phone" name="phone" class="form-control input-md" placeholder="Phone Number: 0987 654 321,">
			                                </div>
			                            </div>                     
			                        </div>	
			                        <div class="row">			                          
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group">
				                                <input type="text" name="email" id="email" class="form-control" placeholder="Email: abc@gmail.com">
			                                </div>
			                            </div>	
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group">
				                                <input type="text" id="website" name="website" class="form-control input-md" placeholder="Website: http://www.google.com">
			                                </div>
			                            </div>
			                             <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group">
				                                <input type="text" id="address" name="address" class="form-control input-md" placeholder="Address">
			                                </div>
			                            </div>
			                        </div>	 	    	                               
			                      	<div class="form-group">
			                      		<div class="row">
			                            	<div class="box-body">	
			                            		<label>Copany Description</label>
								                <textarea id="com_desc" name="com_desc" class="myText form-control"></textarea>	
								            </div>
							            </div>
			                        </div>
			                        <hr class="colorgraph">
				                </div>        
						  	</div>
					  	</div>				  
				  	</div>
				</section>
				<section class="col-md-4 connectedSortable">
					<div class="box box-solid">
					    <div class="box-header"></div>		     
					    <div class="panel">
				    		<div class="col-md-12">
				    			<label>Feature Image</label>
				    			<hr style="margin-top: 0px; margin-bottom: 4px;">
				    			<a id="choosImg" href="javascript::void(0)">Choose Image</a>
					        	<input name="image" type='file' id="imgInp" style="display: none;" />
					        	<center>
							    	<img class="img-responsive" id="blah" src="#"  style="display: none; cursor: pointer;"/>
							    </center>
							    <hr class="colorgraph">		
								<input type="submit" value="Publish" class="btn bg-olive">				               	
				            </div>
			             	<div class="clear"></div>
			             	<br>
						</div>
					</div>			
				</section>   
			<div class="clear"></div>  
			</form>
	    </section>
	    <!-- /.content -->
	</div>
	@include('admin.include.footer')
</div>

@endsection
