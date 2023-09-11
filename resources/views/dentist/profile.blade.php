<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dentist Profile</title>
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

    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script defer src="/js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

</head>

<body id="page-top">

    @include('sweetalert::alert')

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon ">
                <i class="fas fa-user-md fa-lg "></i>
                </div>
                <div class="sidebar-brand-text mx-2 ">I am Dentist</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link bg-info" href="{{ route('dentist.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt "></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

             
            <!-- Nav Item - Utilities Collapse Menu -->
             <!-- Dentist- Dashboard -->
             <li class="nav-item">
                <a class="nav-link" href="{{ route('calendar') }}">
                <i class="fas fa-calendar-alt"></i>
                    <span>Calendar</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dentist.schedule') }}">
                <i class="fas fa-calendar-alt"></i>
                    <span>Create Schedule</span></a>
            </li>

            
           <!-- Dentist- Dashboard -->
           <li class="nav-item">
                <a class="nav-link" href="{{ route('dental.patients') }}">
                <i class="fas fa-user-edit"></i>
                    <span>Patients list</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fab fa-product-hunt"></i>
                    <span>Messages</span></a>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('payment.info') }}">
                    <i class="fa-sm fw-bold">₱</i>
                    <span>Payment Information</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dental.reports') }}">
                <i class="fas fa-cog"></i>
                    <span>Reports</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0 bg-info" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle me-2 text-capitalize" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            Hi Dr. {{ Auth::user()->firstname }}
                            <img src="{{ (!empty(Auth::user()->photo))? url('upload/dentist_profile/'.Auth::user()->photo):url('images/avatar/empty.png') }}" class="rounded-circle" height="22" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('dentist.profile') }}">Profile</a></li>
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

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-5 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">Dentist Profile</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <center>
                                        <img src="{{ (!empty($dentistData->photo))? url('upload/dentist_profile/'.$dentistData->photo):url('images/avatar/empty.png') }}" class="rounded-circle mt-5" style="width: 150px;" alt="Avatar" />
                                    </center>
                                    <div class="mt-3">
                                        <h6 class="card-title">Name: {{ $dentistData->firstname}} {{ $dentistData->lastname}}</h6><hr>
                                        <h6 class="card-title">User Email: {{ $dentistData->email}}</h6><hr>
                                        <h6 class="card-title">Phone Number: {{ $dentistData->phone_number}}</h6><hr>
                                        <h6 class="card-title">Registration No. :{{ $dentistData->registration_num}}</h6><hr>
                                        <h6 class="card-title">Dentist Profession:
                                            @if ($dentistData->dentist_pro == 0)
                                                <span>General Dentist</span>
                                                @elseif ($dentistData->dentist_pro == 1)
                                                <span>Orthodontist</span>
                                                @elseif ($dentistData->dentist_pro == 2)
                                                <span>Periodontist</span>
                                                @elseif ($dentistData->dentist_pro == 3)
                                                <span>Oral and Maxillofacial Surgeon</span>
                                                @elseif ($dentistData->dentist_pro == 4)
                                                <span>Dental Hygienist</span>
                                            @endif
                                        </h6><hr>
                                    </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
                                            <a href="{{ route('dentist.dashboard') }}" class="btn btn-danger btn-sm text-capitalize" type="button">Back</a> 
                                            <a href="{{ route('edit.profile') }}" class="btn btn-info text-capitalize" type="button"><i class="far fa-pen-to-square"></i> Edit Profile</a>
                                        </div>
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