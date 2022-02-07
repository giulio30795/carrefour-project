@extends('layouts.app')

@section('content')
	<div class="container food_show_page">
		{{-- TODO - convenzione nomi classi del container per evitare conflitti nel css // creare file parziali per ogni singola pagina --}}
		@if ($food)
			<h1>
				{{$food->product_name}}
			</h1>

			<h2>
				{{$food->brand}}
			</h2>
			<div class="row">
				<div class="col-6">
					<div class="cover">
						<img class="w-100" src="{{$food->cover}}" alt="img">
					</div>

					
				</div>

					{{-- <div class="thumbs
						@if(!isEmpty($arrayImmagini)) show @endif"  --}}
						{{-- TODO - convenzione nomi dati array --}}
						{{-- > --}}
							{{-- @foreach ($arrayImmagini as $img)
								<img src="{{$img->url}}" alt="{{$img->title}}" class="product_thumbnail">
							@endforeach --}}
					{{-- </div> --}}
				
				<div class="col-6">
					<h4 class="brand">{{$food->conservation}}</h4>
					<p class="brand">disponibilità: {{$food->stock}}</p>
					<p class="brand">{{$food->description}}</p>
					<p class="price">Prezzo: {{$food->price}}€</p>
					{{-- TODO - appena creiamo la tabella finisco la vista così ho una reference esatta dei dati a disposizione --}}

					<div class="d-flex">
						<button class="btn btn-primary">
							<a class="text-white" href="{{ route('admin.food.index') }}">Back To Home</a>
						</button>
				
						<form action="{{route('admin.food.destroy', $food->id)}}" method="POST">
							@csrf
							@method('DELETE') 
			
							<button type="submit" class=" mx-3 btn btn-danger">Delete</button>
						</form>
					</div>
				</div>
			</div>
		@else
			<h2>No product found</h2>
		@endif
	</div>
@endsection