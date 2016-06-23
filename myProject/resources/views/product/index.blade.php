@extends('app')

@section('title')
	Product
@stop

@section('main-content')
	<center><h1>Product Index</h1></center>

	

	<div class="panel panel-default">
		<div class="panel-heading">
		<a href="{{route('products.create')}}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>
                {{ 'Add New Product' }}</a>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Description</td>
						<td>Quantity</td>
						<td>Price (Tk.)</td>
						<td>Action</td>
					</tr>
				</thead>

				<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->name}}</td>
						<td>{{$product->description}}</td>
						<td>{{$product->quantity}}</td>
						<td>{{$product->price}}</td>
						<td>
							<a href="{{route('product.edit', $product)}}" class="btn btn-info btn-xs">Update</a>

							<a href="{{route('product.sell', $product)}}" class="btn btn-primary btn-xs">Sell</a>

							<a href="{{route('product.delete', $product)}}" class="btn btn-danger btn-xs">Delete</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
      </div>
		
		

	</div>
@stop


@section('js')
    @parent
    <script>
        $(document).ready(function(){
            $('.btn-delete').on('click',function(e){
                e.preventDefault();
                $('#deleteModal').modal();
                //change form id value
                $('#deleteProductInput').val($(this).attr('data-id'));
                $('#deleteProductName').val($(this).attr('data-name'));
            })
        });


       
    </script>
@stop

