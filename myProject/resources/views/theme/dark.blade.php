<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
			Product
		@show
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link rel="stylesheet" href="{{url('css/dark.css')}}">
</head>
<body>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-warning" role="alert">
					<h3 style="text-align:center; color:blue;">Product Inventory</h3>
				</div>
			</div>
		</div>

		<div class="container">

			@yield('content')

		</div>
</body>
</html>