
@extends('app')


@section('main-content')

	<h1 class="header"><center>Customer List</center></h1>
	<br><br>

	<div class="panel panel-default">
		<div class="panel-heading">
		<a href="{{route('customer.create')}}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>
                {{ 'Create New Customer' }}</a>
			<table class="table table-bordered table-striped">
		 		<thead>
		 			<tr>
		 				<th>ID</th>
		 				<th>Name</th>
		 				<th>Phone</th>
		 				<th>Action</th>
		 			</tr>
		 		</thead>

		 		<tbody>
		 			@foreach($customers as $customer)
		 			<tr>
		 				<td>{{$customer->id}}</td>
		 				<td>{{$customer->name}}</td>
		 				<td>{{$customer->phone}}</td>
		 				<td>
		 					<a href="{{route('customer.edit', $customer)}}" class="btn btn-info btn-xs"> Edit</a>
		 					<a href="{{route('customer.delete', $customer)}}" class="btn btn-danger btn-xs"> Delete</a>

		 				</td>
		 			</tr>
		 			@endforeach
		 		</tbody>
			</table>
		</div>
	</div>

@stop