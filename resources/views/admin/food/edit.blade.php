@extends('layouts.app')

@section('content')
    <div class="container food_edit_container">
        <h1 class="mb-5">Edit {{ $food->product_name }}</h1>

        <form action="{{ route('admin.food.update', $food->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name*</label>
                <input class="form-control" type="text" id="product_name" name="product_name"
                    value="{{ old('product_name', $food->product_name) }}">
                @error('product_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand*</label>
                <input class="form-control" type="text" id="brand" name="brand" value="{{ old('brand', $food->brand) }}">
                @error('brand')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input class="form-control" type="number" step="0.01" id="price" name="price"
                    value="{{ old('price', $food->price) }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Cover*</label>
                <input class="form-control" type="text" id="cover" name="cover"
                    value="{{ old('cover', $food->cover) }}">
                @error('cover')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="conservation" class="form-label">Conservation*</label>
                <input class="form-control" type="text" id="conservation" name="conservation"
                    value="{{ old('conservation', $food->conservation) }}">
                @error('conservation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock*</label>
                <input class="form-control" type="number" id="stock" name="stock"
                    value="{{ old('stock', $food->stock) }}">
                @error('stock')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity*</label>
                <input class="form-control" type="number" id="quantity" name="quantity"
                    value="{{ old('quantity', $food->quantity) }}">
                @error('quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="discount" class="form-label">Discount*</label>
                <input class="form-control" type="number" step="0.01" id="discount" name="discount"
                    value="{{ old('discount', $food->discount) }}">
                @error('discount')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description*</label>
                <textarea class="form-control" type="text" id="description" name="description"
                    rows="6">{{ old('description', $food->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-label mt-4">Allergens</div>
            @foreach ($allergens as $allergen)
                <span class="form-label mr-3">
                    <input type="checkbox" name="allergens[]" id="allergen{{ $loop->iteration }}"
                        value="{{ $allergen->id }}"
                        @if ($errors->any() && in_array($allergen->id, old('allergens', []))) checked 
                            @elseif(!$errors->any() && $food->allergens->contains($allergen->id))
                            checked @endif>
                    <label for="allergen{{ $loop->iteration }}">{{ $allergen->name }}</label>
                </span>
            @endforeach
            @error('allergens')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <div class="form-label mt-4">Categories</div>
            @foreach ($categories as $category)
                <span class="form-label mr-3">
                    <input type="checkbox" name="categories[]" id="category{{ $loop->iteration }}"
                        value="{{ $category->id }}"
                        @if ($errors->any() && in_array($category->id, old('categories', []))) checked 
                            @elseif(!$errors->any() && $food->categories->contains($category->id))
                            checked @endif>
                    <label for="category{{ $loop->iteration }}">{{ $category->name }}</label>
                </span>
            @endforeach
            @error('categories')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <button class="btn btn-primary d-block" type="submit">Update Food</button>
        </form>
    </div>
@endsection
