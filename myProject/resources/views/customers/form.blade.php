@extends('app')

@section('title')
	Create New Product
@stop


@section('main-content')

<center><h1>Add New Customer</h1></center>

{!! Form::model($customer, ['method' => 'post']) !!}

	<div class="row">
		<div class="col-md-3">
			{!! Form::label('name', 'Name')  !!}
			{!! Form::text('name', $customer->name, ['class' => 'form-control']) !!}
		</div>

		<div class="col-md-3">
			{!! Form::label('phone', 'Phone')  !!}
			{!! Form::text('phone', $customer->phone, ['class' => 'form-control']) !!}
		</div>

		<div class="col-md-offset-3 col-md-6" style="margin-top:10px;">
			{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
		</div>
	</div>






{!! Form::close() !!}






@stop