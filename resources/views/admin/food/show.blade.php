@extends('layouts.app')

@section('content')
	<div class="container food_show_page">
		{{-- TODO - convenzione nomi classi del container per evitare conflitti nel css // creare file parziali per ogni singola pagina --}}
		@if ($food)
			<h2>
				{{$food->product_name}}
			</h2>

			<div class="left">
				<div class="cover"></div>
				<div class="thumbs 
				@if(!isEmpty($arrayImmagini)) show @endif" {{-- TODO - convenzione nomi dati array --}}
				>
					@foreach ($arrayImmagini as $img)
						<img src="{{$img->url}}" alt="{{$img->title}}" class="product_thumbnail">
					@endforeach
				</div>
			</div>
			<div class="right">
				<p class="brand">{{$food->brand}}</p>
				<p class="price">{{$food->price}}</p>
				{{-- TODO - appena creiamo la tabella finisco la vista così ho una reference esatta dei dati a disposizione --}}
			</div>
	
		@else
			<h2>No product found</h2>
		@endif
	</div>
@endsection