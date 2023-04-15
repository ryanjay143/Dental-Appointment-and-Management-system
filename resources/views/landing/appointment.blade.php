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
                    <a href="{{ route('login') }}" class="btn btn-info me-2" type="button" style="width:40%;"><i class="fas fa-lock me-1"></i> Login</button></a>
                    <span class="border-end border border-info  me-2"></span>
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
                            <a class="nav-link me-3 text-light" aria-current="page" href="{{ route('landing') }}">Home</a>
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
                <div class="position-relative">
                    <div class="position-absolute top-50 start-50 translate-middle" style="margin-top: 350px">
                        <div class="card shadow " style="width: 30rem;">
                            <div class="card-body">
                                <h3 class="text-center mt-3 text-info">Set an Appointment</h3>
                                <form action="">
                                    <div class="mb-3 mt-3">
                                        <input type="text" class="form-control border border-info border-2" id="formGroupExampleInput" placeholder="Firstname">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control border border-info border-2" id="formGroupExampleInput2" placeholder="Lastname">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control border border-info border-2" id="formGroupExampleInput2" placeholder="Phone Number">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label fw-bold">Choose date and time:</label>
                                        <input type="datetime-local" class="form-control border border-info border-2" id="inputEmail4">
                                    </div>
                                    <select class="form-select mb-3 border border-info border-2" aria-label="Default select example">
                                        <option selected disabled>Choose your treament</option>
                                        <option value="1">Extraction (Paibot)</option>
                                        <option value="2">Tooth Cleaning</option>
                                        <option value="3">Braces</option>
                                    </select>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control border border-info border-2" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Message:</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" type="button">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>