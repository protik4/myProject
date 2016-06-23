@extends('app')

@section('title')
	Create New Product
@stop


@section('main-content')

	<center><h1>Add New Product</h1></center>

	{!! Form::model($product, ['method'=> 'post', 'files'=>true]) !!}

		<div class="row">
			<div class="col-md-6">
				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
			</div>

			<div class="col-md-6">
				{!! Form::label('description', 'Description') !!}
				{!! Form::text('description', $product->description, ['class' => 'form-control']) !!}
			</div>

			<div class="col-md-6">
				{!! Form::label('quantity', 'Quantity') !!}
				{!! Form::text('quantity', $product->quantity, ['class' => 'form-control']) !!}
			</div>

			<div class="col-md-6">
				{!! Form::label('price', 'Price (Tk.)') !!}
				{!! Form::text('price', $product->price, ['class' => 'form-control']) !!}
			</div>

			<div class="col-md-6">
				{!! Form::label('Photo') !!}
				{!! Form::file('photo') !!}<br/>
			</div>

			<div class="col-md-6" style="margin-top:10px;">
				{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
			</div>

		</div>

	{!! Form::close() !!}


@stop