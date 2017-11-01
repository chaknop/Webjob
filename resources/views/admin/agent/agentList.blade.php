@extends('layout.backend')
@section('packages')
active
@endsection
@section('title')
	Agent List
@endsection
@section('content')
<div class="wrapper">
	<script type="text/javascript" src="{{ asset('adminlte/js/lib/jquery.dataTables.min.js') }}"></script>	
  	@include('admin.include.header')
  	<!-- Left side column. contains the logo and sidebar -->
  	@include('admin.include.leftMenu')
  	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<div class="col-md-12">
		    <section class="content-header row">
			    <h3>Clients List <i class="fa fa-angle-double-right"></i><a href="{{route('getAgentForm')}}"> Add New</a></h3><br>
		    </section>
		    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>
		                  	<input type="checkbox"  id="check_all" style="width: 16px; height: 16px; opacity: 0.7;">
			            </th>
		                <th>Logo</th>
		                <th>Title</th>
		                <th>Industry</th>
		                <th>Created By</th>
		                <th>Created At</th>
		                <th>Status</th>                
		            </tr>
		        </thead>
		    	<tbody>	
		    		@foreach($agents as $post)		    		
	    			<tr>
	    				<td style="width: 17px;vertical-align: middle; text-align: center;">
	    					<input type="checkbox" name="checkall" class="checkall" style="width: 16px; height:16px;opacity:0.7;">
						</td>
	    				<td style="width: 8%;"><img class="img-responsive" src="/photo/photo/thumbnail/{{$post->image}}"></td>
	    				<td>{{ str_limit($post->company_name, 60)}}</td>
	    				<td>{{ $post->industry }}</td>
	    				<td>{{{ $post->user->fullname Or '' }}}</td>
	    				<td>{{ date('Y-M-d', strtotime($post->created_at))}}</td>
	    				<td>
	    					<a data-url="{{route('deletePost')}}"  data-id="{{$post->id}}"  class="btnDeletePost btn btn-danger btn-xs">Delete</a>
	    					<a href="{{url('admin/post/edit')}}/{{$post->id}}" class="btn btn-info btn-xs">Edit</a>
	    				</td>
	    			</tr>
		    		@endforeach
		    	</tbody>
		    </table>
	    </div>
   </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	    $('#example').DataTable();

	    $("#check_all").click(function () {
	        if($("#check_all").is(':checked')){
	        	
	            if ($('#example tbody tr:visible')) {
	                $('#example tbody tr:visible td .checkall').prop('checked', true);     
	            }else{
	                $('#example tbody tr:visible td .checkall').prop('checked', false);     
	            }          
	        } else {
	            $(".checkall").prop('checked', false);
	        }
	    });
	} );
</script>
@endsection

