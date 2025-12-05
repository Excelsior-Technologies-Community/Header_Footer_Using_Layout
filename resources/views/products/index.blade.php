@extends('products.layout')

@section('title', 'Products List')

@section('content')

<div class="container mt-4">

    {{-- Success Message After Adding Product --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Page Title + Add Product Button --}}
    <div class="d-flex justify-content-between mb-3">
        <h2>Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>

    {{-- Products Table --}}
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Size</th>
                <th>Color</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $product)
                <tr>
                    {{-- Product ID --}}
                    <td>{{ $product->id }}</td>

                    {{-- Product Image --}}
                    <td>
                        @if($product->image)
                            <img src="{{ asset('images/' . $product->image) }}" width="60">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>

                    {{-- Product Basic Details --}}
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->size }}</td>
                    <td>{{ $product->color }}</td>

                    {{-- Short Description --}}
                    <td style="max-width: 200px;">
                        {{ \Illuminate\Support\Str::limit($product->description, 50) }}
                    </td>

                    {{-- Status Badge --}}
                    <td>
                        @if($product->status)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                </tr>

            @empty
                {{-- No Products Found --}}
                <tr>
                    <td colspan="8" class="text-center">No products found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination Links --}}
    {{ $products->links() }}

</div>

@endsection
