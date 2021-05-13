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
		@php
			$keys = array_keys($dresses_by_size_model->first()->toArray());
		@endphp
		<thead>
			@foreach ($keys as $key)
				<th>{{$key}}</th>
			@endforeach
		</thead>
		<tbody>
			@foreach ($dresses_by_size_model as $dress)
				<tr>
					@foreach ($keys as $key)
					<td>{{$dress->$key}}</td>
					@endforeach
				</tr>
			@endforeach
		</tbody>
	</table>	


{{-- array of objects --}}
@dump($dresses_by_size_model)
@php
	// object (App\Dress)
	$item = $dresses_by_size_model->first();

	// array
	$array = $item->toArray();

	//
	// $coll = collection($array);

	// array of keys
	$attributes = array_keys($array);

@endphp
@dump($item)
@dump($array)
@dump($attributes)


@endsection