<style>
    .py-5 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    .text-bg-secondary {
        color: #0d0b0b !important;
        background-color: rgb(246 246 246) !important;
    }
    .banner {
        background-image: url('images/home-blog.png');
        width: 850px;
        height: 350px;
        background-size: cover;
    }
</style>

<div class="text-bg-secondary">
    <div class="mx-auto text-center py-5">
     <p class="fw-bold fs-1 mb-1">Welcome to Blog Home!</p>
     <p class="fw-light fs-5 mt-1">A Bootstrap 5 starter layout for your next blog homepage</p>
    </div>
    <div class="text-success">
    <hr>
    </div>
</div>

<!-- Card Part -->
<div class="container py-3">
    <div class="row g-12">
            <!-- First column start -->
            <div class="col-md-8 text-white">
                <div class="card">
                    <img src="{{ asset('images/home.png') }}" alt="Home Blog Image" class="img-fluid">

                    <div class="card-body">
                        <p class="fs-12">July 14, 2025</p>
                        <h5 class="card-title fs-2">Featured Post Title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. 
                            Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!
                        </p>
                        <a href="#" class="btn btn-primary">Read More →</a>
                    </div>
                </div>
                
                <!-- Four Card System start -->
                <div class="row g-12 py-4">
                    <div class="col-md-6 text-white">
                        <div class="card">
                            <img src="{{ asset('images/home.png') }}" alt="Home Blog Image" class="img-fluid">

                            <div class="card-body">
                                <p class="fs-12 mb-1">July 14, 2025</p>
                                <h5 class="card-title fs-2 mb-2">Post Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Reiciendis aliquid atque, nulla.
                                </p>
                                <a href="#" class="btn btn-primary">Read More →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-white">
                        <div class="card">
                            <img src="{{ asset('images/home.png') }}" alt="Home Blog Image" class="img-fluid">

                            <div class="card-body">
                                <p class="fs-12 mb-1">July 14, 2025</p>
                                <h5 class="card-title fs-2 mb-2">Post Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Reiciendis aliquid atque, nulla.
                                </p>
                                <a href="#" class="btn btn-primary">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-12">
                    <div class="col-md-6 text-white">
                        <div class="card">
                            <img src="{{ asset('images/home.png') }}" alt="Home Blog Image" class="img-fluid">

                            <div class="card-body">
                                <p class="fs-12 mb-1">July 14, 2025</p>
                                <h5 class="card-title fs-2 mb-2">Post Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Reiciendis aliquid atque, nulla.
                                </p>
                                <a href="#" class="btn btn-primary">Read More →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-white">
                        <div class="card">
                            <img src="{{ asset('images/home.png') }}" alt="Home Blog Image" class="img-fluid">

                            <div class="card-body">
                                <p class="fs-12 mb-1">July 14, 2025</p>
                                <h5 class="card-title fs-2 mb-2">Post Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                    Reiciendis aliquid atque, nulla.
                                </p>
                                <a href="#" class="btn btn-primary">Read More →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Four Card System end-->
            </div>
            <!--   First column end-->

            <!-- Second column -->
        <div class="col-md-4 bg-secondary text-white">
            Second Column (col-md-2)
        </div>
            <!-- Second column end-->
    </div>
</div>