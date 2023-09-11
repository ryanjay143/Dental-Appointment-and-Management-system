<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>List of Dentists</title>
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

     <!-- Custom styles for this template-->
     <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script defer src="/js/script.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->

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
                            {{ Auth::user()->firstname }} 
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
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-5 mt-5 ">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-info">List of Dentists</h6>
                                        <a href="{{ route('create.account') }}" type="button" class="btn btn-info float-end btn-sm text-capitalize fw-bold"><i class="fas fa-plus-circle"></i> Add Dentist</a>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <table id="example" class="table"> 
                                            <thead class="table-info">
                                                <tr>
                                                    <th scope="col"><p class="fw-bold">#</p> </th>
                                                    <th scope="col"><p class="fw-bold">Photo</p></th>
                                                    <th scope="col"><p class="fw-bold">Firstname</p></th>
                                                    <th scope="col"><p class="fw-bold">Profession</p></th>
                                                    <th scope="col"><p class="fw-bold">Action</p></th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-dark">
                                            
                                                @foreach ($user as $acc)
                                                    <tr>
                                                        <td scope="row">{{$loop->iteration }}</td>
                                                        <td>
                                                            <img src="{{ (!empty($acc->photo))? url('upload/dentist_profile/'.$acc->photo):url('images/avatar/empty.png') }}" class="rounded-circle" style="height: 5vh; width: 25%;" alt="..." />
                                                        </td>
                                                        <td>Dr. {{$acc->firstname }}</td>
                                                        <td>
                                                            @if ($acc->dentist_pro == 0)
                                                                <span>General Dentist</span>
                                                                @elseif ($acc->dentist_pro ==1)
                                                                    <span>Orthodontist</span>
                                                                @elseif ($acc->dentist_pro ==2)
                                                                    <span>Periodontist</span>
                                                                @elseif ($acc->dentist_pro ==3)
                                                                    <span>Oral and Maxillofacial Surgeon</span>
                                                                @elseif ($acc->dentist_pro ==4)
                                                                    <span>Dental Hygienist</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-info btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal{{$acc->id}}"><i class="far fa-eye"></i></button>
                                                            
                                                            <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$acc->firstname}}"><i class="fas fa-pen"></i></button>
                                                            
                                                        <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal{{$acc->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-xl">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-info">
                                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Dentist Profile</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                        
                                                                            <div class="container py-5">
                                                                                <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <div class="card mb-4">
                                                                                    <div class="card-body text-center">
                                                                                    <img src="{{ (!empty($acc->photo))? url('upload/dentist_profile/'.$acc->photo):url('images/avatar/empty.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                                                                        
                                                                                        <h5 class="my-3">{{ $acc->firstname}} {{ $acc->lastname}}</h5>
                                                                                        <p class="text-muted mb-1">
                                                                                            @if ($acc->dentist_pro == 0)
                                                                                                <span>General Dentist</span>
                                                                                                @elseif ($acc->dentist_pro ==1)
                                                                                                    <span>Orthodontist</span>
                                                                                                @elseif ($acc->dentist_pro ==2)
                                                                                                    <span>Periodontist</span>
                                                                                                @elseif ($acc->dentist_pro ==3)
                                                                                                    <span>Oral and Maxillofacial Surgeon</span>
                                                                                                @elseif ($acc->dentist_pro ==4)
                                                                                                    <span>Dental Hygienist</span>
                                                                                            @endif
                                                                                        </p>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <div class="card mb-4">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                        <div class="col-sm-3">
                                                                                            <p class="mb-0">Full Name</p>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <p class="text-muted mb-0">{{ $acc->firstname}} {{ $acc->lastname}}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="row">
                                                                                        <div class="col-sm-3">
                                                                                            <p class="mb-0">Email</p>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <p class="text-muted mb-0">{{ $acc->email}}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="row">
                                                                                        <div class="col-sm-3">
                                                                                            <p class="mb-0">Profession</p>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <p class="text-muted mb-0">
                                                                                            @if ($acc->dentist_pro == 0)
                                                                                                <span>General Dentist</span>
                                                                                                @elseif ($acc->dentist_pro ==1)
                                                                                                    <span>Orthodontist</span>
                                                                                                @elseif ($acc->dentist_pro ==2)
                                                                                                    <span>Periodontist</span>
                                                                                                @elseif ($acc->dentist_pro ==3)
                                                                                                    <span>Oral and Maxillofacial Surgeon</span>
                                                                                                @elseif ($acc->dentist_pro ==4)
                                                                                                    <span>Dental Hygienist</span>
                                                                                            @endif
                                                                                            </p>
                                                                                        </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="row">
                                                                                        <div class="col-sm-3">
                                                                                            <p class="mb-0">Mobile</p>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <p class="text-muted mb-0">{{ $acc->phone_number}}</p>
                                                                                        </div>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="row">
                                                                                        <div class="col-sm-3">
                                                                                            <p class="mb-0">User Type:</p>
                                                                                        </div>
                                                                                        <div class="col-sm-9">
                                                                                            <p class="text-muted mb-0">
                                                                                            @if ($acc->user_type == 0)
                                                                                                <span>Patient</span>
                                                                                                @elseif ($acc->user_type == 1)
                                                                                                    <span>Admin</span>
                                                                                                @elseif ($acc->user_type == 2)
                                                                                                    <span>Dentist</span>
                                                                                            @endif
                                                                                            </p>
                                                                                        </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModal{{$acc->firstname}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-info">
                                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Edit Status</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="" method="post">
                                                                                <div class="mb-3">
                                                                                    <input type="text" readonly class="form-control" id="formGroupExampleInput" value="{{$acc->firstname}} {{$acc->lastname}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <input type="text" readonly class="form-control" id="formGroupExampleInput" value="{{$acc->email}}">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <input type="text" readonly class="form-control" id="formGroupExampleInput" value="@if ($acc->dentist_pro == 0) General Dentist @elseif ($acc->dentist_pro ==1)Orthodontist @elseif ($acc->dentist_pro ==2) Periodontist @elseif ($acc->dentist_pro ==3) Oral and Maxillofacial Surgeon @elseif ($acc->dentist_pro ==4) Dental Hygienist @endif">
                                                                                </div>
                                                                                <div class="mb-3">
                                                                                    <input type="text" readonly class="form-control" id="formGroupExampleInput" value="{{$acc->phone_number}}">
                                                                                </div>
                                                                                <select class="form-select mb-3" aria-label="Default select example">
                                                                                    <option value="1">Active</option>
                                                                                    <option value="2">Inactive</option>
                                                                                </select>
                                                                                <div class="d-grid gap-2">
                                                                                    <button class="btn btn-info btn-sm" type="button">Save</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> 
    <script>
         @if( Session::get('success'))
            Toastify({ text: "{{ Session::get('success') }}", duration: 3000,
            style: { background: "#14A44D" }
            }).showToast();
        @elseif( Session::get('danger'))
            Toastify({ text: "{{ Session::get('danger') }}", duration: 3000,
            style: { background: "#DC4C64" }
            }).showToast();
        @endif
    </script>

</body>

</html>