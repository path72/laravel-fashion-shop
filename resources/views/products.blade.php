@extends('layouts.app')

@section('title', 'Products')
@section('main_content')
	<h3>Products</h3>

	<h4>All Dresses</h4>
	<table>
		<thead>
			<th>model</th>
			<th>fabric</th>
			<th>color</th>
			<th>size</th>
			<th>stock</th>
			<th>availability</th>
		</thead>
		<tbody>
			@foreach ($dresses as $dress)
				@php $class=''; @endphp
				@if ($dress->availability==0) 
					@php $class='grey'; @endphp
				@endif
				<tr class="{{$class}}">
					<td>{{$dress->model}}</td>
					<td>{{$dress->fabric}}</td>
					<td>{{$dress->color}}</td>
					<td>{{$dress->size}}</td>
					<td>{{$dress->stock}}</td>
					<td>{{$dress->availability}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	<h4>Dresses by Size and Model</h4>
	<table>
		<thead>
			<th>size</th>
			<th>model</th>
			<th>total_stock</th>
		</thead>
		<tbody>
			@foreach ($dresses_by_size_model as $dress)
				<tr>
					<td>{{$dress->size}}</td>
					<td>{{$dress->model}}</td>
					<td>{{$dress->total_stock}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

@endsection