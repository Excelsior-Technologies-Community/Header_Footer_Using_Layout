<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
    
    {{-- Website Brand Name / Logo --}}
    <a class="navbar-brand" href="{{ url('/') }}">My Shop</a>

    {{-- Mobile Navbar Toggle Button --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">

            {{-- Link: Product List Page --}}
            <li class="nav-item">
                <a href="{{ route('products.index') }}" 
                   class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}">
                    Products
                </a>
            </li>

            {{-- Link: Add Product Page --}}
            <li class="nav-item">
                <a href="{{ route('products.create') }}" 
                   class="nav-link {{ request()->routeIs('products.create') ? 'active' : '' }}">
                    Add Product
                </a>
            </li>

        </ul>
    </div>

</nav>
