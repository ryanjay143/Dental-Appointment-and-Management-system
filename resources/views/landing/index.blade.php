<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Appointment</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-tooth fa-lg text-info m-3"></i><span class="fw-bold fs-4 text-info me-2" style="margin-left: -10px;">Sheriyan</span><span class="fst-normal fw-bold">Dental </span><span class="text-info me-2 fw-bold">Care</span> 
                </a>
                <form class="d-flex " role="search">
                    <input class="form-control me-2 border border-info" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info me-2 " type="submit"><i class="fas fa-search"></i></button>
                    <a href="{{ route('login') }}" class="btn btn-info me-1" type="button" style="width:40%;"><i class="fas fa-lock me-1"></i> Login</button></a>
                    <a href="{{ route('register') }}" class="btn btn-light me-2 border border-info" type="button" style="width:50%;"><i class="fas fa-registered"></i> Sign-up</button></a>
                </form>
            </div>
        </nav>
    </header>
        <nav>
            <nav class="navbar navbar-expand-lg bg-body-tertiary bg-info">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link active me-3 text-light" aria-current="page" href="{{ route('landing') }}">Home</a>
                            <a class="nav-link me-3 text-light" href="{{ route('about') }}">About</a>
                            <a class="nav-link me-3 text-light" href="{{ route('contact') }}">Contact</a>
                            <a class="nav-link me-3 text-light" href="{{ route('products') }}">Products</a>
                            <a class="nav-link me-3 text-light" href="{{ route('services') }}">Services</a>
                            <a class="nav-link me-3 text-light" href="{{ route('our.dentist') }}">Our Dentist</a>
                            <a class="nav-link me-3 text-light" href="{{ route('showCart') }}"><i class="fab fa-opencart fa-lg"></i> My Cart <span class="badge text-bg-danger">0</span></a>
                        </div>
                    </div>
                </div>
            </nav>
        </nav>

        <!-- Background image -->
        <div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('/images/dental.jpeg'); height: 100vh;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="carousel-caption">
                    <h1 class="text-light text-start display-2 fst-normal">Welcome to our <br> <strong class="text-info fw-bold display-1">Dental Appointment and Management System</strong></h1>
                    <p class="text-start text-light fst-normal">Because of your smile, you make life more beautiful.</p>
                    <button type="button" class="btn btn-info float-start me-3 mb-11 data-mdb-ripple-color=dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-calendar-check fa-lg me-2"></i> Set An Appointment</button>
                    <a href="{{ route('products') }}" type="button" class="btn btn-light float-start ">Our Products</button></a>
                </div>
            </div>
            
        </div>

        <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                       <div class="text-start">
                            <p class="p-3 bg-info fw-bold text-dark">Are you new Patient?</p>
                       </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <a href="{{ route('pinformation') }}" button type="button" class="btn btn-info me-3">Yes</button></a>
                                <a href="{{ route('userApp') }}" button type="button" class="btn btn-secondary">No</button></a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>

        <!-- As a link -->
        <nav class="navbar bg-info bg-body-tertiary">
            <div class="container-fluid">
                <div class="container text-center">
                    <div class="row row-cols-4">
                        <div class="col border-end border-dark">
                            <i class="fas fa-phone fa-lg text-success m-2"></i><span class="text-dark fw-bold"> (+63) 935 855 4398 </span><br>Contact Us
                        </div>
                        <div class="col border-end border-dark">
                            <i class="fas fa-clock fa-lg text-dark m-2"></i><span class="text-dark fw-bold"> MON-SAT: 8:00AM-5:00PM</span><br>Sunday Closed
                        </div>
                        <div class="col border-end border-dark"><i class=""></i>
                            <i class="far fa-envelope fa-lg text-danger m-2"></i><span class="text-dark fw-bold">dentalapp@gmail.com</span><br>Send us a message
                        </div>
                        <div class="col">
                            <i class="fas fa-map-marker-alt fa-lg text-light m-2"></i><span class="text-dark fw-bold">Cagayan de Oro, City</span><br>Visit our location
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Section Part -->
        <section>
            <div class="container">
                <div class="card shadow border border-info" style="margin-top: 35px;">
                    <div class="text-center mt-5">
                        <h3 class="text-dark">Our Basic Services</h3>
                    </div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    @foreach ($treatments as $treatment)
                                    <a href=""><div class="card hover-zoom me-3 mb-3 border border-info shadow" style="width: 16rem; margin-left: 20px; display:inline-block;">
                                        <img src="{{ asset($treatment->image) }}" class="img-fluid" style="height: 15vh;" alt="...">
                                        <div class="card-body text-dark">
                                            <h6 class="card-title">{{$treatment->name }}</h6>
                                            <p class="card-text">&#8369; {{$treatment->price }}</p>
                                        </div>
                                        <a href="" type="button" class="btn btn-link w-100">View more --></a>
                                    </div></a>
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{ route('services') }}" type="button" class="btn btn-outline-light mt-5 text-dark border border-info" data-mdb-ripple-color="dark">View more services</button></a>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
           


        <!-- Section Part -->


            <!-- Dental Map -->
            <div class="container" style="margin-top: 90px;">
                <div class="text-center mb-4">
                    <h3>Our Dental Map</h3><hr>
                </div>
                    
                    <div class="container mb-5 text-center">
                    <div class="row">
                        <div class="col">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Southern de Oro , Cagayan de oro&t=k&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                        <a href="https://2yu.co">2yu</a><br>
                                        <style>
                                            .mapouter
                                            {
                                                position:relative;
                                                text-align:right;
                                                height:100%;
                                                width:100%;
                                                }
                                        </style>
                                        <a href="https://embedgooglemap.2yu.co/">html embed google map</a>
                                        <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                                    </div>
                                </div>
                            </div>
                        <div class="col ">
                            <div class="card border border-info">
                                <div class="card-body">
                                    <h5 class="fw-bold text-center text-dark">Help us improve</h5> <hr>
                                    <form action="">
                                        <div class="mb-3 mt-4 text-start">
                                            <label for="formGroupExampleInput" class="form-label text-dark fw-bold">How often do you visit our website?</label>
                                            <input type="text" class="form-control border border-info" id="formGroupExampleInput" placeholder="everyday/one a week/bi-weekly ">
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label for="exampleFormControlTextarea1" class="form-label text-dark fw-bold">What is the motivation to use our website?</label>
                                            <textarea class="form-control border border-info" id="exampleFormControlTextarea1" rows="3" placeholder="What problem does it solve for you?"></textarea>
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label for="formGroupExampleInput" class="form-label text-dark fw-bold">What is your most feature?</label>
                                            <input type="text" class="form-control border border-info" id="formGroupExampleInput">
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label for="formGroupExampleInput" class="form-label text-dark fw-bold">What would you like to see improve the most?</label>
                                            <input type="text" class="form-control border border-info" id="formGroupExampleInput">
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label for="exampleFormControlTextarea1" class="form-label text-dark fw-bold">Other feedbacks:</label>
                                            <textarea class="form-control border border-info" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-info fs-6" type="button">SUBMIT FEEDBACK</button>
                                        </div>
                                    </form>             
                                </div>                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
     
        <!-- Footer -->
            <footer class="bg-dark text-center text-white" style="margin-top: 120px;">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fa-solid fa-tooth fa-lg m-3"></i>Sheriyan Dental Care
                    </h6>
                    <p>
                    Adam and Eve had many advantages, but the principle one was that they escaped teething.
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Clinic hours
                    </h6>
                    <p><span class="fw-bold text-uppercase">Mon:</span><span class="float-end">8:00am - 5:00pm</span></p>
                    <p><span class="fw-bold text-uppercase">tues:</span><span class="float-end">8:00am - 5:00pm</span></p>
                    <p><span class="fw-bold text-uppercase">wed:</span><span class="float-end">8:00am - 5:00pm</span></p>
                    <p><span class="fw-bold text-uppercase">thurs:</span><span class="float-end">8:00am - 5:00pm</span></p>
                    <p><span class="fw-bold text-uppercase">fri:</span><span class="float-end">8:00am - 5:00pm</span></p>
                    <p><span class="fw-bold text-uppercase">sat:</span><span class="float-end">8:00am - 5:00pm</span></p>
                    <p><span class="fw-bold text-uppercase me-5">sun:</span><span>Closed</span></p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Our Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Anti-Microbial</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Anticaries Treatments</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">AntiTartar</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset btn-link">See more --></a>
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> Cagayan de Oro City, Philippines</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        dentalapp@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> (+63) 935 855 4398</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                Thank you for visit us!
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>