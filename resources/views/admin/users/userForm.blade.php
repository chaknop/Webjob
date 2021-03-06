@extends('layout.backend')
@section('users')
active
@endsection
@section('content')
<div class="wrapper">
	  @include('admin.include.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.include.leftMenu')
  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <section class="content row">
	    	<form method="POST">
	    		<div class="col-md-12 showMessage">
	    		</div>
	    		{{ csrf_field() }}	    		
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>Add New User </h3>			  
					    </div>
						<div class="row">						    
						    <div class="box-body">
						      	<div class="col-md-12 col-md-12">		                   
			                    	<div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group has-feedback username">
				                              	<input type="text" name="username" class="form-control" placeholder="User Name*" id="username" required>
				                              	<span class="fa fa-user form-control-feedback"></span>    
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group has-feedback fullname">
				                               <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name*">
				                               <span class="fa fa-user form-control-feedback"></span> 
			                                </div>
			                            </div>
			                        </div>
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group has-feedback password">
				                              	<input required type="password" name="password" id="password" class="form-control" placeholder="Password*">
				                              	<span class="fa fa-unlock-alt form-control-feedback"></span>
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group has-feedback re-password">
				                               <input required type="password" name="re-password" id="re-password" class="form-control" placeholder="Re-Type Password">
				                               <span class="fa fa-unlock-alt form-control-feedback"></span>
			                                </div>
			                            </div>
			                        </div>     
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                            	<div class="form-group has-feedback email">
				                              	<input required type="email" name="email" id="email" class="form-control" placeholder="Email Address*">
				                              	<span class="fa fa-envelope-o form-control-feedback"></span>
				                            </div>
			                            </div>
			                            <div class="col-xs-12 col-sm-6 col-md-6">
			                                <div class="form-group has-feedback phone ">
				                               <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number*">
				                           		<span class="fa fa-phone-square form-control-feedback"></span>
			                                </div>
			                            </div>
			                        </div> 
			                        <hr class="colorgraph">
				                </div>        
						  	</div>
					  	</div>				  
				  	</div>
				</section>
				<section class="col-md-4 pull-left-3 connectedSortable">
					<div class="box box-solid">
					    <div class="box-header"></div>		     
					    <div class="panel">
				    		<div class="col-md-12">				    		
					        	<center>
							    	<img style="width:55%;" class="img-responsive" src="/img/create_user.png" />
							    </center>
							    <hr class="colorgraph">		
			<input type="submit" id="btnSave" value="Register Now" data-url="{{ route('addUser') }}" class="btn bg-olive"  >
				            </div>
			             	<div class="clear"></div>
			             	<br>
						</div>
					</div>			
				</section>   
			<div class="clear"></div>  
			</form>
	    </section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">		 
		</div>
		<strong>Copyright &copy; 2016-2017 <a href="#">Almsaeed Studio</a>.</strong> All rights
		reserved.
	</footer>
</div>
@endsection
