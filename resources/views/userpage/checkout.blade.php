<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script defer src="/js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
   
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script defer src="/js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

</head>
<body>

    @include('sweetalert::alert')
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-tooth fa-lg text-info m-3"></i><span class="fw-bold fs-4 text-info me-2" style="margin-left: -10px;">Sheriyan</span><span class="fst-normal fw-bold">Dental </span><span class="text-info me-2 fw-bold">Care</span> 
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 border border-info" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-info me-2" type="submit"><i class="fas fa-search"></i></button>
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle text-uppercase" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-alt me-1"></i> {{ Auth::user()->firstname }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile') }}"><i class="fas fa-user-circle me-2"></i> My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('password') }}"><i class="fas fa-unlock-alt me-2"></i> Change Password</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('appointmentTable') }}"> <i class="fas fa-tachometer-alt me-2"></i>  Dashboard</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
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
                            <a class="nav-link me-3 text-light" aria-current="page" href="{{ route('home') }}">Home</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userAbout') }}">About</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userContact') }}">Contact</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userProducts') }}">Products</a>
                            <a class="nav-link me-3 text-light" href="{{ route('dentalServices') }}">Services</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userDentist') }}">Our Dentist</a>
                            <a class="nav-link me-3 text-light" href="{{ route('showCart') }}"><i class="fab fa-opencart fa-lg"></i> My Cart <span class="badge text-bg-danger">{{$cart}}</span></a>
                            <!-- <a class="nav-link active me-3 text-light" href="{{ route('appointmentTable') }}"><i class="far fa-calendar-check"></i> My Appointment</a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </nav>
        
       
        <section>
            <div class="container">
                <div class="card shadow mt-5 mb-5">
                    <div class="card-header bg-info">
                        <h4 class="text-start text-light display-6"> Checkout</h4>
                    </div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="container">
                                        <div class="card mb-3 border border-info">
                                            <div class="card-body">
                                                <p class="text-start text-dark fw-bold text-uppercase">My Order: <small>{{$order}}</small></p><hr>
                                                    <table class="table">
                                                    <form action="{{ url('orderDetails') }}" method="POST">
                                                        @csrf
                                                        @php $total = 0 @endphp
                                                        @foreach($viewOrder as $order)
                                                        @php $total += $order->price * $order->quantity @endphp
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-start">
                                                                        <input type="text" name="image[]" value="{{ asset($order->product_image) }}" hidden="">
                                                                        <img src="{{ asset($order->product_image) }}" class="card-img-top" style="height: 8vh; width: 35%;" alt="...">
                                                                    </td>
                                                                    <td class="text-start text-info">
                                                                        <input type="text" name="productname[]" value="{{$order->product_name}}" hidden="">
                                                                        {{$order->product_name}}
                                                                    </td>
                                                                    <td>
                                                                        <input type="number" class="form-control border border-info" id="quantity" min="1" name="quantity[]" style="width: 90px;" value="{{$order->quantity}}" hidden="">
                                                                        {{$order->quantity}}
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <input type="text" class="form-control border border-info" id="subtotal" name="subtotal[]" style="width: 90px;" value="{{$order->price * $order->quantity}}" hidden="">
                                                                        &#8369; {{$order->price * $order->quantity}}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        @endforeach
                                                    </table>
                                                    <div class="container text-center">
                                                        <div class="row">
                                                            <div class="col">
                                                                <p class="text-start text-muted ">Total: </p>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" hidden="" name="total" id="total" value="{{$total}}">
                                                                <p class="text-end">{{$total}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="note note-info mb-3 text-start">
                                            <strong>Note:</strong> You can pay through the clinic! or via Gcash
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="container">
                                        <div class="card border border-info">
                                            <div class="card-body">
                                                <div class="container">
                                                    <p class="text-start text-dark fw-bold text-uppercase">Shipping details</p><hr>
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Name:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" disabled class="form-control fw-bold" id="staticEmail" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Email:</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" disabled class="form-control fw-bold" id="staticEmail" value="{{ Auth::user()->email }}">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Mobile No.</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" disabled class="form-control fw-bold" id="staticEmail" value="{{ Auth::user()->phone_number }}">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="d-grid gap-2 d-md-block mt-3 ">
                                            <a href="{{ route ('cancelOrder') }}" class="btn btn-danger" type="submit">Cancel Orders</a>
                                            <button class="btn btn-info" type="submit">Confirm Orders</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
     
        <!-- Footer -->
            <footer class="bg-dark text-center text-white" style="margin-top: 80px;">
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