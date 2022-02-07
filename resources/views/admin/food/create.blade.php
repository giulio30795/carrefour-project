@extends('layout.app')
@section('content')
    <div class="w-75 create_crud">
        <form action="{{ route('admin.food.store') }}" method="POST">
            @csrf
            <label for="title" class="form-label mt-4">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo del Food">
            <button class="mt-4 btn btn-primary" type="submit">
                Crea nuovo Food
            </button>
        </form>
    </div>
@endsection
