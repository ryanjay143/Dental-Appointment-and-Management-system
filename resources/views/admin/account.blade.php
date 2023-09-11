<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create an Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body id="page-top">

    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <i class="fas fa-user-circle fa-lg text-light"></i>
                </div>
                <div class="sidebar-brand-text mx-2">Dental Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt fa-2x"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
             
            <!-- Nav Item - Utilities Collapse Menu -->

             <!-- Users Managements -->
             <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('users.manage') }}">
                <i class="fas fa-user fa-2x"></i>
                    <span>Users Management</span></a>
            </li> -->

             <!-- Patients -->
             <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('dental.patient') }}">
                <i class="fa-solid fa-wheelchair"></i>
                    <span>Patients</span></a>
            </li> -->

          <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-user fa-2x"></i>
                    <span>Manage Users</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ route('dental.patient') }}"><i class="fa-solid fa-wheelchair"></i> Patients</a>
                        <a class="collapse-item" href="{{ route('dentist.list') }}"><i class="fas fa-user-md"></i> Dentist</a>
                    </div>
                </div>
            </li>
           

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('appointment') }}">
                    <i class="far fa-calendar-alt fa-2x"></i>
                    <span>Appointments</span></a>
            </li>

            <!-- Treamenst -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dental.treatments') }}">
                    <i class="fas fa-briefcase"></i>
                    <span>Treatments</span></a>
            </li>

            <!-- Orders-->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders') }}">
                <i class="fa-solid fa-bag-shopping"></i>
                    <span>Orders</span></a>
            </li>

             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fab fa-product-hunt"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="{{ route('category.products') }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Categories</a>
                        <a class="collapse-item" href="{{ route('product.view') }}"><i class="fab fa-product-hunt" aria-hidden="true"></i> Dental Products</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('payment') }}">
                    <i class="fa-sm fw-bold fa-2x">₱</i>
                    <span>Manage Payment</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.reports') }}">
                <i class="fa-sharp fa-solid fa-notes-medical"></i>
                    <span>Transaction</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - User Information -->
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle me-2 text-capitalize" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            Admin {{ Auth::user()->firstname }} 
                            <img id="showImage" src="{{ (!empty(Auth::user()->photo))? url('upload/admin_profile/'.Auth::user()->photo):url('images/avatar/profile.jpg') }}" class="rounded-circle" height="22" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('admin.profile') }}">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                        </div>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <!-- Content Row -->
                    <div class="row">
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-5 mt-5 border border-info">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header border border-info py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">Create an Account!</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="note note-info">
                                        <strong>Note:</strong> Create an account for Dentist Only!
                                    </div>
                                    @if($errors->any())
                                        @foreach($errors->all() as $err)
                                        <p class="text-danger">{{ $err }}</p>
                                        @endforeach
                                        @endif
                                    <form action="{{ route('account.action') }}" method="POST" class="row g-3 needs-validation" novalidate>
                                    @csrf
                                        <div class="col-md-12">
                                            <label for="inputname" class="form-label text-dark"></label>
                                            <select id="inputState" class="form-select" hidden="hidden" name="user_type">
                                                <option value="2" @selected(old('user_type' == 2))>Dentist</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Firstname <span class="text-danger">*</span></label>
                                            <input type="name" class="form-control border border-info" id="inputEmail4" name="firstname" value="{{ old('firstname') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Lastname <span class="text-danger">*</span></label>
                                            <input type="name" class="form-control border border-info" id="inputPassword4" name="lastname" value="{{ old('lastname') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Username <span class="text-danger">*</span></label>
                                            <input type="username" class="form-control border border-info" id="inputEmail4" name="username" value="{{ old('username') }}">
                                            <div class="form-text text-secondary mb-4">Username will be unique from firstname and lastname</div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control border border-info" id="inputPassword4" name="email" value="{{ old('email') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Mobile Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control border border-info" id="inputPassword4" name="phone_number" value="{{ old('phone_number') }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Doctor's Profession <span class="text-danger">*</span></label>
                                            <select id="inputState" class="form-select border border-info" name="dentist_pro">
                                                <option value="0" @selected(old('dentist_pro' == 0))>General Dentist</option>
                                                <option value="1" @selected(old('dentist_pro' == 1))>Orthodontist</option>
                                                <option value="2" @selected(old('dentist_pro' == 2))>Periodontist </option>
                                                <option value="3" @selected(old('dentist_pro' == 3))>Oral and Maxillofacial Surgeon</option>
                                                <option value="4" @selected(old('dentist_pro' == 4))>Dental Hygienist</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <label for="inputname" class="form-label text-dark">Select Profession <span class="text-danger">*</span></label>
                                            <select id="inputState" class="form-select" name="user_type">
                                                <option selected disabled>Select Profession</option>
                                                <option value="2" @selected(old('user_type' == 2))>Dental Assistants</option>
                                                <option value="2" @selected(old('user_type' == 2))>Dental Hygienists</option>
                                                <option value="2" @selected(old('user_type' == 2))>Cosmetic Dentist</option>
                                                <option value="2" @selected(old('user_type' == 2))>Dental Laboratory Technicians</option>
                                                <option value="2" @selected(old('user_type' == 2))>Oral and Maxillofacial Surgeon</option>
                                                <option value="2" @selected(old('user_type' == 2))>General Dentist</option>
                                                <option value="2" @selected(old('user_type' == 2))>Orthodontist </option>
                                            </select>
                                        </div> -->
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control border border-info" id="inputPassword4" name="password">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputname" class="form-label text-dark">Confirm Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control border border-info" id="inputPassword4" name="password_confirm">
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <label for="inputname" class="form-label text-dark">Upload Photo <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control border border-info" id="inputPassword4" name="photo" value="">
                                        </div> -->
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- No. of Dentist -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4 mt-5 border border-info">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header border border-info border-1 py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">No. of Dentist: {{count($account)}}</h6>
                                    <a href="{{ route('dentist.list') }}" type="button" class="btn-link float-end text-info fw-bold"> See Details</a>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="fw-bold text-dark">
                                                <th scope="col">#</th>
                                                <th scope="col">Firstname</th>
                                                <th scope="col">Lastname</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($account) > 0)
                                                @foreach ($account as $acc)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>Dr. {{$acc->firstname }}</td>
                                                    <td>{{$acc->lastname }}</td>
                                                </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6">
                                                       <p class="text-center p-1">Dentis no available</p>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> 
    <script>
         @if( Session::get('success'))
            Toastify({ text: "{{ Session::get('success') }}", duration: 3000,
            style: { background: "#14A44D" }
            }).showToast();
        @endif
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

</html>