<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental - login</title>
    <link rel="stylesheet" href="css/style.css">
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
                            <a class="nav-link me-3 text-light" href="{{ route('landing') }}">Home</a>
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
            <div class="bg-image">
                <img src="{{('images/dental.jpeg')}}" class="img-fluid w-100" alt="Sample" style="height: 100vh;"/>
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="position-relative" style="margin-top: 300px;">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="container">
                                    <div class="card shadow border border-info border-3" style="width: 25rem;"> 
                                        <div class="position-relative">
                                            <div class="position-absolute top-0 start-50 translate-middle">
                                                <div class="badge bg-info p-10 text-wrap fw-normal" style="width: 20rem"><h1>Login Form</h1></div>
                                            </div>
                                        </div>  
                                        <div class="card-body mt-4">
                                        @if($errors->any())
                                            @foreach($errors->all() as $err)
                                            <p class="text-start text-danger">{{ $err }}</p>
                                            @endforeach
                                        @endif
                                        <form action="{{ route('login.action') }}" method="POST">
                                            @csrf
                                            <!-- Username input -->
                                                <label for="formGroupExampleInput" class="form-label mt-4 text-dark fw-bold">Username</label>
                                                <div class="input-group  border border-info border-2 rounded">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                                    <input type="text" class="form-control rounded border border-info border-2" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" @if(Cookie::has('usrnme')) value="{{Cookie::get('usrnme')}}" @endif type="username" name="username" id="username" value="{{ old('username') }}">
                                                    
                                                </div>

                                            <!-- Password input -->
                                                <label for="formGroupExampleInput" class="form-label mt-4 text-dark fw-bold">Password</label>
                                                <div class="input-group mb-4 border border-info border-2 rounded">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                                                    <input type="password" class="form-control rounded border-info border-2" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" @if(Cookie::has('psword')) value="{{Cookie::get('psword')}}" @endif class="form-control border border-info  border-4" type="password" name="password" id="username">
                                                </div>
                                                                   
                                            <!-- Submit button -->
                                            <button type="submit" class="btn btn-info btn-block mb-3"><i class="fas fa-sign-in-alt fa-lg me-2"></i> Sign in</button>
                                            
                                            <!-- 2 column grid layout for inline styling -->
                                            <div class="row mb-4">
                                                <div class="col d-flex ">
                                                <!-- Checkbox -->
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck"  @if(Cookie::has('usrnme')) @endif value="" name="rememberme" id="rememberme">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>


                                           
                                            <!-- Register buttons -->
                                            <div class="text-center">
                                                <p>Not a member? <a href="{{url('register')}}">Register</a></p>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> 
    <!-- <script>
         @if( Session::get('success'))
            Toastify({ text: "{{ Session::get('success') }}", duration: 3000,
            style: { background: "#14A44D" }
            }).showToast();
        @endif
    </script> -->
       
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>
</html>