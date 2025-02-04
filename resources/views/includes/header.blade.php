
<div class="container-fluid">
    {{-- <div class="row bg-secondary py-2 px-xl-5"> --}}
        {{-- <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark" href="">FAQs</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Help</a>
                <span class="text-muted px-2">|</span>
                <a class="text-dark" href="">Support</a>
            </div>
        </div> --}}
        {{-- <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div> --}}
    {{-- </div> --}}
    <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{route('/')}}" class="text-decoration-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>SHOP</h1>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-left">
            <form action="/search" method="GET" class="search-form">
                <div class="input-group">
                    <input 
                        type="text" 
                        name="query" 
                        class="form-control" 
                        placeholder="Search..." 
                        aria-label="Search"
                        value="{{ htmlspecialchars($_GET['query'] ?? '')}}"
                    >
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-search input-group-text bg-transparent text-primary">
                        <i class="fas fa-search"></i> <!-- Font Awesome Icon -->
                    </button>
                </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3 col-6 text-right">
            <a href="{{ route('showWishlist') }}" class="btn border">
                <i class="fas fa-heart text-primary"></i>
                <span class="badge" id="wishlist-count">{{ WishlistItem() }}</span>
            </a>
            <a href="{{ route('showcart') }}" class="btn border">
                <i class="fas fa-shopping-cart text-primary"></i>
                <span class="badge" id="cart-count">{{ CartItem() }}</span>
            </a>
        </div>
        
              
    </div>
</div>

<script src="js/custom.js">
</script>



