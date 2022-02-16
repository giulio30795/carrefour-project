@extends('layouts.app')

@section('content')
	<div class="container food_index_page">
		<h1 class="text-center my-5">
			Products Database
		</h1>

		<table class="table mb-5">
			<thead class="fs-5 text-center">
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
					<th class="text-center" colspan="3">
						Actions
					</th>
				</tr>
			</thead>
			<tbody class="text-center">
				@forelse ($foods as $food)
					<tr>
						<td>{{$food->id}}</td>
						<td class="text-start">{{$food->product_name}}</td>
						<td>{{$food->price}}€</td>
						<td>
							@if ($food->stock >= 1)
								Yes
							@else
								No
							@endif
						</td>
						<td>
							<button class="btn btn-primary">
								<a class="text-white text-decoration-none" href="{{route('admin.food.show', $food->id)}}">Show</a></td>
							</button>
						<td>
							<button class="btn btn-success">
								<a class="text-white text-decoration-none" href="{{route('admin.food.edit', $food->id)}}">Edit</a></td>
							</button>
						<td>
							<form action="{{ route('admin.food.destroy', $food->id )}}" method="POST">
								@csrf 
								@method('DELETE')
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