@extends('layout.backend')
@section('program')
active
@endsection
@section('title')
	Category List
@endsection
@section('content')
<div class="wrapper">
   @include('admin.include.header')
  <!-- Left side column. contains the logo and sidebar -->
   @include('admin.include.leftMenu')
<?php 
    if ( isset($_GET['eid']) ) {
        $action = route('getEdit');
        $eid = $_GET['eid'];
        $cat = \App\Category::find($_GET['eid']);
        $title = $cat['title'];
        $slug = $cat['slug'];
        $details = $cat['details'];

    }else{
        $eid ='';
        $slug = '';
        $title ='';
        $details = '';
        $action = route('categoryAdd');
    }
?>   
  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
	    <section class="content row">
    		<div class="col-md-12" id="LoadMessage">  
    		  	@if(Session::has('message'))
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ Session('message') }}
                    </div>
                @endif     			
    			<h3><small> Update Category  <i class="fa fa-angle-double-right"></i> <a href="/admin/category">Add New</a></small></h3>
    		</div>
	    	<form method="POST" action="{{$action}}">
	    		{{ csrf_field() }}
	    		<input type="hidden" name="eid" value="{{ $eid }}">
				<section class="col-md-4 connectedSortable">
					<div class="box box-solid">
					    <div class="box-header"></div>		     
					    <div class="panel">
				    		<div class="col-md-12">
				    			<label>Add New Category</label>
				    			<div class="row">		                        
		                            <div class="col-xs-12 col-sm-12 col-md-12">
		                                <div class="form-group has-feedback" id="message_error">
			                                <input type="text" name="title" id="category_name" class="form-control input-md" placeholder="Category Name" value="{{$title}}" required>
		                                </div>
		                            </div>
		                            <div class="col-xs-12 col-sm-12 col-md-12">
		                                <div class="form-group">
			                                <textarea  id="details" name="details" rows="6" class="form-control" placeholder="Description" required> {{$details}}</textarea>
		                                </div>
		                            </div>
		                        </div>						        	
							    <hr class="colorgraph">	
								@if( isset($_GET['eid']) )
	                            	<input type="submit" value="Update" class="btn bg-olive">
	                            @else
                                    <input type="submit" value="Add" class="btn bg-olive" id="btnAddCategory">
	                            @endif
				            </div>
			             	<div class="clear"></div>
			             	<br>
						</div>
					</div>			
				</section> 
			</form> 
				<section class="col-md-8 connectedSortable">
					<div class="panel">
						<div class="box-header">			
					       <h3>Category List </h3>			  
					    </div>
					    <div class="box-body">
					    	<table class="table" id="example">
					    		<thead>
					    			<th>title</th>
					    			<th>Details</th>	
					    			<th class="text-right">Status</th>				
					    		</thead>
					    		<tbody>
					    			@foreach($getCat as $cat)
					    			<tr>
					    				<td>{{$cat->title}}</td>
					    				<td>{{$cat->details}}</td>
					    				<td class="text-right">
					    				<a href="/admin/category?eid={{$cat->id}}" data-id="{{$cat->id}}" class="btn btn-info btn-xs">Edit</a>
					    				<a href="javascript:(0)" data-id="{{$cat->id}}" class="btn btn-danger btn-xs btnCatDelete">Delete</a>
					    				</td>
					    			</tr>
					    			@endforeach
					    		</tbody>
					    	</table>
					    	{{$getCat->links()}}
							<br>
					  	</div>				  					  
				  	</div>
				</section> 
				<div class="clear"></div>  
	    </section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
		</div>
		<strong>Copyright &copy; 2016-2017 <a href="#">Almsaeed Studio</a>.</strong> All rights
		reserved.
	</footer>
</div>
<!-- <script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script> -->

@endsection
