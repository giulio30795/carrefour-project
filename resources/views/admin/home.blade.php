@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Welcome {{Auth::user()->name}}</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>Here You Can:</h2>
                    <ul>
                        <li>View The Archive</li>
                        <li>Add New Products</li>
                        <li>Modify an existing product</li>
                        <li>Delete products</li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
