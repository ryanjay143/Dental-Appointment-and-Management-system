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

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
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
                            <a class="nav-link me-3 text-light" href="{{ route('home') }}">Home</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userAbout') }}">About</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userContact') }}">Contact</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userProducts') }}">Products</a>
                            <a class="nav-link me-3 text-light" href="{{ route('dentalServices') }}">Services</a>
                            <a class="nav-link me-3 text-light" href="{{ route('userDentist') }}">Our Dentist</a>
                            <a class="nav-link me-3 text-light" href="{{ route('showCart') }}"><i class="fab fa-opencart fa-lg"></i> My Cart <span class="badge text-bg-danger">{{$cart}}</span></a>
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
                        <div class="card shadow border border-info border-3" style="width: 30rem;">
                            <div class="card-body">
                                <h3 class="text-center mt-3 text-info">Set an Appointment</h3><hr>
                                @if($errors->any())
                                        @foreach($errors->all() as $err)
                                        <p class="text-danger">{{ $err }}</p>
                                        @endforeach
                                    @endif
                                <form action="{{ route('set.appointment') }}" method="POST">
                                {!! csrf_field() !!}
                                    <div class="mb-3">
                                        <input type="hidden" class="form-control border border-info border-2" id="formGroupExampleInput2" name="user_id" value="{{ Auth::user()->id }}">
                                    </div>
                                    <div class="row mb-3 mt-4 ">
                                        <div class="col">
                                            <input type="text" class="form-control border border-info" placeholder="First name" aria-label="First name" name="firstname" value="{{ Auth::user()->firstname }}">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control border border-info" placeholder="Last name" aria-label="Last name" name="lastname" value="{{ Auth::user()->lastname }}">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control border border-info border-2" id="formGroupExampleInput2" placeholder="Phone Number" name="phone_num" value="{{ Auth::user()->phone_number }}">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label fw-bold">Choose date and time:</label>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <input type="date" class="form-control border border-info" placeholder="First name" aria-label="First name" name="date" value="date">
                                            </div>
                                            <div class="col">
                                                <input type="time" class="form-control border border-info" placeholder="Last name" aria-label="Last name" name="time" value="time">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <select class="form-select mb-3 border border-info border-2" aria-label="Default select example" name="treatment_id" id="treatment_id">
                                    <option selected disabled>Select Treatments</option>
                                        @foreach($treatments as $treat)
                                            <option value="{{ $treat->treatment_id }}">{{ $treat->name }}</option>
                                        @endforeach
                                    </select>
                                   
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control border border-info border-2" placeholder="Leave a comment here" id="floatingTextarea2" name="message" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Message:</label>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" type="submit">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> 

    <script>
        //  @if( Session::get('success'))
        //     Toastify({ text: "{{ Session::get('success') }}", duration: 4000,
        //     style: { background: "#14A44D" }
        //     }).showToast();
        
        @elseif($errors->any())
        @foreach($errors->all() as $err)
        Toastify({ text: "{{ $err }}", duration: 3000,
        style: { background: "#DC4C64" }
            }).showToast();
        @endforeach
        @endif
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>