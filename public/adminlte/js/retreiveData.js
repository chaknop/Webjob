
$(function(){
	var baseUrl = location.protocol +'//'+location.host;
	var getData = function (){
		var Url = baseUrl+'/admin/app/category';

		$.ajax({
	        method: "GET",  
		    url: Url,	 
		    dataType: 'json',			
			success: function (respon) {
				var dataload = '';
				$.each(respon, function(index, data) {
					dataload += "<tr><td>"+data.title+"</td><td>"+data.details+"</td><td><button data-id="+data.id+" class=' btn btn-info btn-xs'>Edit</button></td></tr>";  	
				});
				$("#LoadData").html(dataload);
	        },
	        error: function (respon) {
	            alert('Error');
		    }
		});
	}
	getData();

	$("#btnAddCategory").click(function(e){
		if ($("#category_name").val() != '' && $("#details").val() != '') {
			$.ajax({
		       	type: "POST",  
			    url: baseUrl+'/admin/app/category/add',
				data: {
					title: $("#category_name").val(),
					details: $("#details").val(),					
					_token: $("input[name='_token']").val()
				},
				dataType: "json",
		        success: function (respon) {
		        	if(respon.message == 'success'){
		       			$("#LoadMessage").html('<div class="alert alert-warning alert-dismissible show" role="alert"><strong>'+respon.message+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');	
		       			window.location.reload();
		       		}else{
		       			$("#LoadMessage").html('<div class="alert alert-warning alert-dismissible show" role="alert"><strong>'+respon.message+'</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
					}
		        },
		        error: function (respon) {
		            alert('Error');
		        }
			});
		}else{
			$("#category_name").focus();
			$("#message_error").addClass('has-error');
		}
		e.preventDefault();
	});


	$(".btnCatDelete").click(function(e){
		var dataId = $(this).attr('data-id');
		var remove_row = $(this).closest("tr");
		$.ajax({
	        method: "GET",  
		    url: baseUrl+'/admin/app/category/delete',
		    data: {dataId:dataId},	 
		    dataType: 'json',			
			success: function (respon) {
				if (confirm("Are you sure, you want to remove this?")) {					
					remove_row.fadeOut(500, function(){
						$(remove_row).css({'background': '#f5f3f3'});
						remove_row.remove();						
					});
					return false;
				}else{
					return false;
				}			
	        },
	        error: function (respon) {
	            // alert('Error');
		    }
		});
		e.preventDefault();	
	});


	
});