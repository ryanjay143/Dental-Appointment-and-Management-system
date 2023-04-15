<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
                            <a class="nav-link me-3 text-light"  href="{{ route('landing') }}">Home</a>
                            <a class="nav-link active me-3 text-light" aria-current="page" href="{{ route('about') }}">About</a>
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


        <!-- Section -->
        <section>
            <div class="container-fluid">
                <div class="text-center mt-5">
                    <h1 class="fw-bold text-dark">About Us</h1><hr>
                </div>
                <p class="fst-normal mt-5 p-5">We are committed to offering quality dental care for the whole family. Whether you are in need of cosmetic dentistry, restorative work, or a regular 
                    dental checkup, you are in good hands with our friendly, skilled dental technicians and qualified dentists. Choosing the right dentist can be tricky. Patients want a highly 
                    trained dental expert, that goes without saying. But they also want someone they trust and feel at ease with, who can provide them with a comfortable dental experience. 
                    Writing an About Us page that covers those needs and wants can mean the difference between a prospective patient giving you a call or moving on to the next dentist's website.
                </p>
                <div class="container text-center">
                    <div class="row row-cols-2">
                        <div class="col mb-3">
                            <div class="card shadow border border-info ">
                                <div class="text-start p-5">
                                    <h4 class="display-6">Comprehensive Care</h4>
                                    <p class="mt-3">Our dentists provide complete dental care from Family Dentistry and Preventive Dental Care to more complex Cosmetic treatments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="card shadow border border-info ">
                                    <div class="text-start p-5 ">
                                        <h4 class="display-6">We Open 6 Days a Week</h4>
                                        <p class="mt-3">We understand that our patients live a busy lifestyle. That is why we are open early and late weekdays, weekends and public holidays.</p>
                                    </div>
                                </div>
                            </div>
                        <div class="col">
                            <div class="card shadow border border-info ">
                                    <div class="text-start p-5 ">
                                        <h4 class="display-6">We are Your Local Dentist</h4>
                                        <p class="mt-3">We are the fastest growing dental clinic here in Cagayn de Oro. There is a very good chance that a dental clinic is very close.</p>
                                    </div>
                                </div>
                            </div>
                        <div class="col">
                            <div class="card shadow  border border-info ">
                                    <div class="text-start p-5">
                                        <h4 class="display-6">Affordable Dental Care</h4>
                                        <p class="mt-3">Without sacrificing quality we provide affordable dentistry. We always provide a written treatment plan with transparent fees.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

         <!-- Section Part -->
         <section>
            <div class="container">
                <div class="card shadow border border-info" style="margin-top: 35px;">
                    <div class="text-center mt-5">
                        <h3 class="text-dark">Our Services</h3>
                    </div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col ">
                                    @foreach ($treatments as $treatment)
                                    <a href=""><div class="card hover-zoom me-3 mb-3 border border-info shadow" style="width: 16rem; margin-left: 20px; display:inline-block;">
                                        <img src="{{ asset($treatment->image) }}" class="img-fluid" style="height: 15vh;" alt="...">
                                        <div class="card-body text-dark">
                                            <h6 class="card-title">{{$treatment->name }}</h6>
                                            <p class="card-text">&#8369; {{$treatment->price }}</p>
                                        </div>
                                        <a href="" type="button" class="btn btn-link w-100">Read more --></a>
                                    </div></a>
                                    @endforeach
                                </div>
                            </div>
                           <a href="{{ route('services') }}"  type="button" class="btn btn-outline-light mt-5 text-dark border border-info" data-mdb-ripple-color="dark">View more services</button></a>
                        </div>
                    </div>
                </div>    
            </div>
        </section>
     
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