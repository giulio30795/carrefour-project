@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($food)
			<h2>
				{{$food->product_name}}
			</h2>

			<div class="left">
				<div class="thumbs"></div>
				<div class="cover"></div>
			</div>
			<div class="right">
				// brand
				// price
				// 
			</div>
	
		@else
			
		@endif
	</div>
@endsection