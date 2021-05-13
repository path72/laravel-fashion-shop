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


@php
	
	// MODEL = ELOQUENT'S OBJECT

	/**
	 * toArray()
	 * convert a model and its loaded relationships to an array
	 */
	// model as array of array
	$dresses_by_size_model_array = $dresses_by_size_model->toArray();

	// model of single item
	$item_model = $dresses_by_size_model->first();

	// array of model's properties (just the properties I need!) 
	$properties_array = $item_model->toArray();

	// array of keys 
	$keys_array = array_keys($properties_array);

@endphp

model (eloquent's object): dresses_by_size_model
@dump($dresses_by_size_model)

model as array of array: dresses_by_size_model_array = $dresses_by_size_model->toArray();
@dump($dresses_by_size_model_array)

model of single item: $item_model = $dresses_by_size_model->first();
@dump($item_model)

array of single item model's properties: $properties_array = $item_model->toArray();
@dump($properties_array)

array of keys of single item model's properties: $keys_array = array_keys($properties_array);
@dump($keys_array)

@endsection