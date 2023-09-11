<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's Information</title>
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
        <div class="bg-image d-flex justify-content-center align-items-center" style="background-image: url('/images/dental.jpeg'); height: 210vh;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="container">
                    <center>
                        <div class="card shadow mt-5 border border-info border-3" style="width: 40rem; ">
                            <div class="card-body">
                                <div class="text-start">
                                    <h4>Patient's Information</h4><hr>
                                </div>
                                <div class="note note-info mb-3 text-start">
                                    <strong>Note:</strong> Please bring your Valid Id during appointment! 
                                </div>
                                @if($errors->any())
                                    @foreach($errors->all() as $err)
                                    <p class="text-danger">{{ $err }}</p>
                                    @endforeach
                                @endif
                                <form action="{{ route('pinfo') }}" method="POST"  class="row g-3" enctype="multipart/form-data">
                                    {!! csrf_field() !!}
                                    <input type="hidden" class="form-control border border-info border-1" name="Personal_information" value="{{ Auth::user()->id }}">
                                    
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label text-info">Firstname</label>
                                        <input type="name" class="form-control border border-info border-1" value="{{ Auth::user()->firstname }}" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label text-info">Lastname</label>
                                        <input type="name" class="form-control border border-info border-1" name="lastname" id="lastname" value="{{ Auth::user()->lastname }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label text-info">Date of Birth</label>
                                        <select id="inputState" class="form-select border border-info border-1" name="month" id="month" required>
                                        <option selected disabled>Month</option>
                                        <option value="0"  @selected( old('month' == 0))>January</option>
                                        <option value="1"  @selected( old('month' == 1))>February</option>
                                        <option value="2"  @selected( old('month' == 2))>March</option>
                                        <option value="3"  @selected( old('month' == 3))>April</option>
                                        <option value="4"  @selected( old('month' == 4))>May</option>
                                        <option value="5"  @selected( old('month' == 5))>June</option>
                                        <option value="6"  @selected( old('month' == 6))>July</option>
                                        <option value="7"  @selected( old('month' == 7))>August</option>
                                        <option value="8"  @selected( old('month' == 8))>September</option>
                                        <option value="9"  @selected( old('month' == 9))>October</option>
                                        <option value="10" @selected( old('month' == 10))>November</option>
                                        <option value="11" @selected( old('month' ==1))>December</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-5">
                                        <input type="number" min="01" max="31" step="1" id="day" value="01" class="form-control border border-info border-1" placeholder="Day" name="day" value="{{ old('day') }}" required>
                                    </div>
                                    <div class="col-md-4 mt-5">
                                        <input type="number" min="1900" max="2023" step="1" id="year" value="2023" class="form-control border border-info border-1" placeholder="Year" name="year" value="{{ old('year') }}" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label text-info">Contact Number</label>
                                        <input type="text" class="form-control border border-info border-1" id="contact" placeholder="09*********" value="{{ Auth::user()->phone_number }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label text-info">Email</label>
                                        <input type="email" class="form-control border border-info border-1" id="email" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="col-md-5">
                                        <label for="inputCity" class="form-label text-info">Address</label>
                                        <input type="text" class="form-control border border-info border-1" id="address" placeholder="Barangay" name="location" value="{{ old('location') }}" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCity" class="form-label text-info"> </label>
                                        <input type="text" class="form-control mt-2 border border-info border-1" id="state" placeholder="State/Province" name="state" value="{{ old('state') }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputZip" class="form-label"></label>
                                        <input type="text" class="form-control mt-2 border border-info border-1" id="zip_code" placeholder="Postal/Zip Code" name="zip_code" value="{{ old('zip_code') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label text-info ">Martial Status</label>
                                        <select class="form-select border border-info border-1" aria-label="Default select example" id="status" name="status" required>
                                            <option selected disabled>Martial Status</option>
                                            <option value="0" @selected( old('status' == 0))>Single</option>
                                            <option value="1" @selected( old('status' == 1))>Married</option>
                                            <option value="2" @selected( old('status' == 2))>Divorced</option>
                                            <option value="3" @selected( old('status' == 3))>Separated</option>
                                            <option value="4" @selected( old('status' == 4))>Widowed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="inputEmail4" class="form-label text-info">Gender</label>
                                        <select class="form-select border border-info border-1" aria-label="Default select example" id="gender" name="gender" required>
                                            <option selected disabled>Select your Gender</option>
                                            <option value="0" @selected( old ('gender' == 0))>Male</option>
                                            <option value="1" @selected( old ('gender' == 1))>Female</option>
                                        </select>
                                    </div><hr>
                                    <p class="mt-3">In case of emergency</p>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label text-info">Emergency Contact</label>
                                        <input type="name" class="form-control border border-info border-1" id="E_firstname" placeholder="Firstname" name="E_firstname" value="{{ old('E_firstname') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label text-info"></label>
                                        <input type="name" class="form-control mt-2 border border-info border-1" id="E_lastname" placeholder="Lastname" name="E_lastname" value="{{ old('E_lastname') }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label text-info"></label>
                                        <input type="text" class="form-control mt-2 border border-info border-1" id="relationship" placeholder="Relationship" name="relationship" value="{{ old('relationship') }}" required>
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <label for="inputPassword4" class="form-label text-info"></label>
                                        <input type="text" class="form-control mt-2 border border-info border-1" id="E_contact_num" placeholder="Contact Number"  name="E_contact_num" value="{{ old('E_contact_num') }}" required>
                                    </div><hr>
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label text-info">Weight(kilograms)</label>
                                        <input type="text" class="form-control border border-info border-1" id="weight" placeholder="Weight" name="weight" value="{{ old('weight') }}" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="inputPassword4" class="form-label text-info">Height (feet)</label>
                                        <input type="text" class="form-control border border-info border-1" id="height" placeholder="Height" name="height" value="{{ old('height') }}" required>
                                    </div><hr>
                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-info float-end" id="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </center>
                   
                </div>
            </div>
        </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> 
    <!-- <script>
         @if( Session::get('success'))
            Toastify({ text: "{{ Session::get('success') }}", duration: 4000,
            style: { background: "#14A44D" }
            }).showToast();
        
        @elseif($errors->any())
        @foreach($errors->all() as $err)
        Toastify({ text: "{{ $err }}", duration: 3000,
        style: { background: "#DC4C64" }
            }).showToast();
        @endforeach
        @endif
    </script> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>