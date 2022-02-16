@extends('layouts.app')
@section('content')
    <div class="w-50 mx-auto create_crud mb-5">
        <h1 class="mb-2">Add Product</h1>
        <form action="{{ route('admin.food.store') }}" method="POST">
            @csrf

            {{-- product_name --}}
            <label for="product_name" class="form-label mt-4">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="product_name"
                value="{{ old('product_name') }}">
            @error('product_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- brand --}}
            <label for="brand" class="form-label mt-4">Product brand</label>
            <input type="text" class="form-control" name="brand" id="brand" value="{{ old('brand') }}">
            @error('brand')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- price --}}
            <label for="price" class="form-label mt-4">Price</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- cover --}}
            <label for="cover" class="form-label mt-4">Cover URL</label>
            <input type="text" class="form-control" name="cover" id="cover" value="{{ old('cover') }}">
            @error('cover')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- conservation --}}
            <label for="conservation" class="form-label mt-4">Conservation</label>
            <select class="form-control" name="conservation" id="conservation">
                <option value="Fresco">Fresco</option>
                <option value="Surgelato">Surgelato</option>
                <option value="Scaffale">Scaffale</option>
            </select>
            @error('conservation')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- stock --}}
            <label for="stock" class="form-label mt-4">Product Stock</label>
            <input type="number" class="form-control" name="stock" id="stock" value="{{ old('stock') }}">
            @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- quantity --}}
            <label for="quantity" class="form-label mt-4">Product Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}">
            @error('quantity')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- discount --}}
            <label for="discount" class="form-label mt-4">Product Discount</label>
            <input type="number" class="form-control" name="discount" id="discount" value="{{ old('discount') }}">
            @error('discount')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- description --}}
            <label for="description" class="form-label mt-4">Product Description</label>
            <textarea rows="6" class="form-control" name="description" id="description">{{ old('description') }}
                            </textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            {{-- send --}}
            <button class="mt-4 btn btn-primary" type="submit">
                Crea nuovo Food
            </button>
        </form>
    </div>
@endsection
