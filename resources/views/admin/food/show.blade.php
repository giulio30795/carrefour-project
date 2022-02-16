@extends('layouts.app')

@section('content')
	<div class="container food_show_page">
		{{-- TODO - convenzione nomi classi del container per evitare conflitti nel css // creare file parziali per ogni singola pagina --}}
		@if ($food)
			<h1 class="mb-3">
				{{$food->product_name}}
			</h1>

			<h3 class="mb-3">
				{{$food->brand}}
			</h3>
			<div class="row">
				<div class="col-6">
					<div style="height: 500px" class="cover">
						<img style="object-fit: contain" class="w-100 h-100" src="{{$food->cover}}" alt="{{$food->product_name}}">
					</div>	
				</div>
				
				<div class="col-6">
					<h4 class="brand">{{$food->conservation}}</h4>
					<p class="brand">Stock: {{$food->stock}}</p>
					<p class="brand">{{$food->description}}</p>
					<p class="price">Price: {{$food->price}}€</p>
					{{-- TODO - appena creiamo la tabella finisco la vista così ho una reference esatta dei dati a disposizione --}}

					<div class="d-flex">
						<button class="btn btn-primary">
							<a class="text-white text-decoration-none" href="{{ route('admin.food.index') }}">Back To Home</a>
						</button>

						<button class="btn btn-success mx-3">
							<a class="text-white text-decoration-none" href="{{route('admin.food.edit', $food->id)}}">Edit</a></td>
						</button>
				
						<form action="{{route('admin.food.destroy', $food->id)}}" method="POST">
							@csrf
							@method('DELETE') 
			
							<button type="submit" class="btn btn-danger">Delete</button>
						</form>
					</div>
				</div>
			</div>
		@else
			<h2>No product found</h2>
		@endif
	</div>
@endsection