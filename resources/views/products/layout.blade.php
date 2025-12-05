<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Default Title --}}
    <title>@yield('title', 'Product CRUD')</title>

    {{-- SEO & OG Data from child page --}}
    @yield('meta')

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    {{-- Header --}}
    @include('products.header')

    {{-- Page Content --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('products.footer')

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
