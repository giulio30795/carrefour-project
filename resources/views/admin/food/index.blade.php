@extends('layouts.app')

@section('content')
	<div class="container food_index_page">
		<h1>
			Lista food Products
		</h1>

		<table class="table">
			<thead>
				<tr>
					<th>
						ID
					</th>
					<th>
						Name
					</th>
					<th>
						Price
					</th>
					<th>
						Stock
					</th>
					<th colspan="3">
						Actions
					</th>
				</tr>
			</thead>
			<tbody>
				@forelse ($foods as $food)
					<tr>
						<td>{{$food->id}}</td>
						<td>{{$food->product_name}}</td>
						<td>{{$food->price}}€</td>
						<td>
							@if ($food->stock >= 1)
								Yes
							@else
								No
							@endif
						</td>
						<td>{{route('admin.food.show', $food->id)}}</td>
						<td>{{route('admin.food.edit'), $food->id}}</td>
						<td>
							<form action="{{ route('admin.food.destroy', $food->id )}}" method="POST">
								@csrf @method('DELETE')
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>
				@empty
				<h3>No Food Products Found</h3>
				@endforelse
			</tbody>
		</table>
	</div>
@endsection