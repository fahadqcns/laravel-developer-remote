<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Laravel Skills Test</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css')
}}">
</head>
<body>
<div class="container">
<div class="page-header">
@yield('header')
</div>
@if (Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
@yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script>

$(document).ready(function() {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	$("#submit").on("click", function(event) {
		var product_name = $("#product_name").val();
		var quantity = $("#quantity").val();
		var price = $("#price").val();

		param = "product_name="+product_name+"&quantity="+quantity+"&price="+price;
		var path  = "product";
		console.log(param);
		$.ajax({
			type: 'POST',
			data: param,
			url:  path,
			success:function(msg){
				console.log(msg);
				alert(msg);
				//$(".formLogin .err-msg").remove();
				//if(msg=='1')
				//	$(".formLogin #lower").before('<div class="suc-msg">Pin code has been resend successfully</div>');
				
			}
		})
	});
	

});

</script>


</body>
</html>