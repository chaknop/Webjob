function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           var imag = $('#blah').attr('src', e.target.result);
           if (imag) {
           		$("#choosImg").hide();
           }else{
           		$("#choosImg").show();
           }
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(function(){
	$("#choosImg, #blah").click(function(){
		$("#imgInp").click();
	});
	$("#imgInp").change(function(){
	    readURL(this);
	    $("#blah").show();
	});
})
