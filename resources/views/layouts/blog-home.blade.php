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
                <div class="text-success">
                    <hr>
                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                        <a class="page-link">Newer</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" aria-current="page">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Older</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--   First column end-->


            <!-- Second column -->
        <div class="col-md-4 text-white">
            <div class="col-12 mb-2 ms-2 me-0">
                <div class="card">
                    <div class="card-header">
                        Search
                    </div>
                    <div class="card-body">
                        <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Enter search term..." aria-label="Search"/>
                            <button class="btn btn-primary" type="submit">Go!</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-2 ms-2 me-0 py-3">
                <div class="card">
                    <div class="card-header">
                        Categories
                    </div>
                    <div class="card-body">
                        <div class="row g-12">
                            <div class="col-6">
                                <p class="mb-1"><a class="web-design-hover" href="#">Web Design</a></p>
                                <p class="mb-1"><a class="html-hover" href="#">HTML</a></p>
                                <p class="mb-0"><a class="freebies-hover" href="#">Freebies</a></p>
                            </div>
                            <div class="col-6">
                                <p class="mb-1"><a class="javaScript-hover" href="#">JavaScript</a></p>
                                <p class="mb-1"><a class="css-hover" href="#">CSS</a></p>
                                <p class="mb-0"><a class="tutorials-hover" href="#">Tutorials</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-2 ms-2 me-0 py-1">
                <div class="card">
                    <div class="card-header">
                        Side Widget
                    </div>
                    <div class="card-body">
                        <p class="card-text">You can put anything you want inside of these side widgets. 
                            They are easy to use, and feature the Bootstrap 5 card component!</p>
                    </div>
                </div>
            </div>
        </div>
            <!-- Second column end-->
    </div>
</div>