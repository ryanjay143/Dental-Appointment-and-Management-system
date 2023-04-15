<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-tooth fa-lg text-info m-3"></i><span class="fw-bold fs-4 text-info me-2" style="margin-left: -10px;">Sheriyan</span><span class="fst-normal fw-bold">Dental </span><span class="text-info me-2 fw-bold">Care</span> 
                </a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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


        <!-- Profile Status -->
        <section>
            <div class="container">
                <div class="card mt-5 mb-5 border border-info" style="background-color: #eee; ">
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <img id="showImage" src="{{ (!empty($patientEdit->photo))? url('upload/patient_profile/'.$patientEdit->photo):url('images/avatar/profile.jpg') }}" class="card-img-top" alt="">
                                </div>
                                <div class="col">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Update Profile</h4>
                                            <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                                <div class="row mb-3">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname" value="{{ $patientEdit->firstname }}">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lastname" value="{{ $patientEdit->lastname }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3 text-start">
                                                    <label for="formGroupExampleInput" class="form-label text-dark">Username</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="username" value="{{ $patientEdit->username }}">
                                                </div>
                                                <div class="mb-3 text-start">
                                                    <label for="formGroupExampleInput" class="form-label text-dark">Email</label>
                                                    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="email" value="{{ $patientEdit->email }}">
                                                </div>
                                                <div class="mb-3 text-start">
                                                    <label for="formGroupExampleInput" class="form-label text-dark">Phone</label>
                                                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="phone_number" value="{{ $patientEdit->phone_number }}">
                                                </div>
                                                <div class="mb-3 text-start">
                                                    <label for="formGroupExampleInput" class="form-label text-dark">Profile Photo</label>
                                                    <input type="file" class="form-control" id="photo" placeholder="Another input placeholder" name="photo" value="{{ $patientEdit->photo }}">
                                                </div>
                                                <div class="d-grid gap-2 d-md-block float-end">
                                                    <a href="{{ route('profile') }}" button class="btn btn-danger" type="button">Back</button></a>
                                                    <button class="btn btn-info" type="submit">Update Profile</button>
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

        <script type="text/javascript">

        $(document).ready(function(){
            $('#photo').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>