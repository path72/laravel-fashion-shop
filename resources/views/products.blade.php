@extends('layouts.app')

@section('title', 'Products')
@section('main_content')
	<h3>Products</h3>

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
				@if ($dress->availability==0) 
					@php $class='grey'; @endphp
				@else
					@php $class=''; @endphp
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

@endsection