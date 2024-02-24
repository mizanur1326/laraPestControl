 <!-- Topbar Start -->
 <div class="container-fluid topbar-top bg-primary">
    <div class="container">
        <div class="d-flex justify-content-between topbar py-2">
            <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>123 Street, CA, USA</a>
                <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+01234567890</a>
                <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>Example@gmail.com</a>
            </div>
            <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <div class="d-flex">
                                <input type="search" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required=""/>
                                <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center topbar-icon">
                <a href="#" class="me-4"><i class="fab fa-facebook-f text-dark"></i></a>
                <a href="#" class="me-4"><i class="fab fa-twitter text-dark"></i></a>
                <a href="#" class="me-4"><i class="fab fa-instagram text-dark"></i></a>
                <a href="#" class=""><i class="fab fa-linkedin-in text-dark"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
            <a href="/" class="navbar-brand">
                <h1 class="text-primary mb-0 display-5">Pest<span class="text-white">Kit</span><i class="fa fa-spider text-primary ms-2"></i></h1>
            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-dark"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('ourservices')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('blog')}}" class="nav-item nav-link">Blog</a> 
                    <a href="{{url('packege')}}" class="nav-item nav-link">Packeges</a>                    
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0 bg-primary">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="blog.html" class="dropdown-item">Blog Post</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div> --}}
                    <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>

                    <a href="{{url('cart')}}" class="nav-item nav-link">
                        <i class="fa-solid fa-cart-shopping" style="color: #fffb00;">
                            <span class="badge bg-danger text-white rounded-pill bg-primary p-2 ms-2">
                                {{ is_array(session()->get('cart')) ? count(session()->get('cart')) : 0 }}
                            </span>
                        </i>
                    </a>

                    {{-- <span class="nav-item nav-link">
                    @auth('customer')
                        {{ Auth::guard('customer')->user()->name }}
                        <form method="POST" action="{{ route('customer.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="/customer/login"> <i class="fa-solid fa-user" style="color: #FFD43B;"></i> </a>
                    @endauth
                    </span> --}}

                    <span class="nav-item nav-link">
                    @auth('customer')                                              
                        <li class="nav-item dropdown nav-user"> 
                            {{-- remove  <nav-link> class from li --}}
                            <a class="" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user" style="color: #FFD43B;"></i></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-dark nav-user-name">{{ Auth::guard('customer')->user()->name }}</h5>
                                </div>
                                <a class="dropdown-item" href="{{ route('myorders') }}"><i class="fas fa-user mr-2"></i>My Orders</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <form method="POST" action="{{ route('customer.logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    @else
                        <a href="/customer/login"> <i class="fa-solid fa-user" style="color: #FFD43B;"></i> </a>
                    @endauth
                    </span>                   
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->