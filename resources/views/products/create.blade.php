@extends('products.layout')

@section('content')

<div class="container mt-4">
    <h2>Add Product</h2>

    {{-- Product creation form --}}
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

            {{-- Product Name Input --}}
            <div class="col-md-6 mb-3">
                <label>Product Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>

            {{-- Product Price Input --}}
            <div class="col-md-6 mb-3">
                <label>Price</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>

            {{-- Product Size --}}
            <div class="col-md-6 mb-3">
                <label>Size</label>
                <input type="text" name="size" class="form-control">
            </div>

            {{-- Product Color --}}
            <div class="col-md-6 mb-3">
                <label>Color</label>
                <input type="text" name="color" class="form-control">
            </div>

            {{-- Product Description --}}
            <div class="col-md-12 mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            {{-- Product Image Upload --}}
            <div class="col-md-6 mb-3">
                <label>Product Image</label>
                <input type="file" name="image" class="form-control" onchange="previewImage(this)">
            </div>

            {{-- Image Preview Section --}}
            <div class="col-md-6 mb-3">
                <label>Preview</label><br>
                <img id="previewImg" style="width:150px; height:auto; display:none; border:1px solid #ddd; padding:5px; border-radius:5px;">
            </div>

            {{-- Product Status --}}
            <div class="col-md-6 mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

        </div>

        {{-- Submit and Back Buttons --}}
        <button class="btn btn-success mt-3">Submit</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>

    </form>
</div>

{{-- Live Image Preview Script --}}
<script>
function previewImage(input) {
    let file = input.files[0];

    if (file) {
        let reader = new FileReader();

        reader.onload = function(e) {
            let preview = document.getElementById('previewImg');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(file);
    }
}
</script>

@endsection
