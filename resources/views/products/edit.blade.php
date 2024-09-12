@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Product</h2>
        <div class="card shadow-sm p-4 bg-white rounded">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="sku" class="form-label" style="color: #e74c3c;">SKU</label>
                    <input type="text" name="sku" class="form-control border-danger" value="{{ old('sku', $product->sku) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="name" class="form-label" style="color: #e74c3c;">Name</label>
                    <input type="text" name="name" class="form-control border-danger" value="{{ old('name', $product->name) }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label" style="color: #e74c3c;">Description</label>
                    <textarea name="description" class="form-control border-danger" required>{{ old('description', $product->description) }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label" style="color: #e74c3c;">Price</label>
                    <input type="number" name="price" step="0.01" class="form-control border-danger" value="{{ old('price', $product->price) }}" required>
                </div>
                <button type="submit" class="btn btn-warning">Update Product</button>
            </form>
        </div>
    </div>
@endsection
