@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add New Product</h2>
        <div class="card shadow-sm p-4 bg-white rounded">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="sku" class="form-label" style="color: #3498db;">SKU</label>
                    <input type="text" name="sku" class="form-control border-info" placeholder="SKU must be unique" required>
                </div>
                <div class="form-group mb-3">
                    <label for="name" class="form-label" style="color: #3498db;">Name</label>
                    <input type="text" name="name" class="form-control border-info" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label" style="color: #3498db;">Description</label>
                    <textarea name="description" class="form-control border-info" rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label" style="color: #3498db;">Price</label>
                    <input type="number" name="price" step="0.01" class="form-control border-info" required>
                </div>
                <button type="submit" class="btn btn-success">Add Product</button>
            </form>
        </div>
    </div>
@endsection
