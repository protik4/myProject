@extends('theme.dark')

@section('title')
@parent
Index
@stop

@section('content')
	<div class="row">
		@foreach($products as $product)

			<div class="col-md-6">
				<div class="alert alert-success" role="alert">

					<div class="row">
						<div class="col-md-6">
							<p>Name: {{ $product->name }}</p>
							<p>Description: {{ $product->description }}</p>
							<p>Quantity: {{ $product->quantity }}</p>
							<p>Price: {{ $product->price }}</p>
						</div>
                             
                             <div class="col-md-6">
							<div class="pull-right">
								<abbr title="Show User Avatar">
	                                <img src="{!! asset('img/products/'. $product->photo)!!}" 
	                                         style="width:100px;" class="img-polaroid" alt="" >
	                            </abbr>
	                        </div>							
						</div>
						
					</div>

				</div>
			</div>
		@endforeach		
	</div>
@stop