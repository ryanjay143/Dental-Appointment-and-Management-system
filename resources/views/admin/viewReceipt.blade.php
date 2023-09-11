<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View Receipt</title>
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
    <!-- <script src="/js/receipt.js"></script> -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->

   
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
                <img id="showImage" src="{{ (!empty(Auth::user()->photo))? url('upload/admin_profile/'.Auth::user()->photo):url('images/avatar/profile.jpg') }}" class="rounded-circle" height="22" alt="">
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
            <li class="nav-item">
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
            <li class="nav-item ">
                <a class="nav-link " href="{{ route('orders') }}">
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

            
            <li class="nav-item ">
                <a class="nav-link " href="{{ route ('payment') }}">
                    <i class="fa-sm fw-bold fa-2x">&#8369;</i>
                    <span>Manage Payment</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
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
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle me-2 text-capitalize text-light" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
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
                    

                       
                        <div class="col-xl-12 col-lg-7">
                            <div class="container">
                            <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="invoice-container ">
                                                    <div id="receipt" class="invoice-header receipt">
                                                        <!-- Row start -->
                                                        <div class="row gutters">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                <div class=" mb-5">
                                                                <a href="#" class="btn btn-info btn-sm no-print" onclick="window.print()">
                                                                    <i class="icon-download"></i> Download and Print
                                                                </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                       
                                                        <!-- Row start -->
                                                        <div class="row gutters">
                                                            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                                                <div class="invoice-details">
                                                                    <div>Patient Name: {{ $reports->patientName}}</div>
                                                                    <div>Payment Method: {{ $reports->payment_method }}</div>
                                                                    <div>Reference Number: {{ $reports->reference }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                                                <div class="invoice-details">
                                                                    <div class="invoice-num order-number">
                                                                        <div>Order Number: {{ $reports->orderNum }}</div>
                                                                        <div>Date: {{ $date }}</div>
                                                                    </div>
                                                                </div>													
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                    <div class="invoice-body">
                                                        <!-- Row start -->
                                                        <div class="row gutters">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <div class="table-responsive">
                                                                    <table class="table m-0">
                                                                        <thead class="table-info">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Items</th>
                                                                                <th>Quantity</th>
                                                                                <th>Sub Total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($orderDetails as $order)
                                                                                <tr>
                                                                                    <td>{{ $loop->iteration }}</td>
                                                                                    <td>{{ $order->product_name }}</td>
                                                                                    <td>{{ $order->quantity}}</td>
                                                                                    <td>{{ number_format($order->subTotal, 2) }}</td>

                                                                                </tr>
                                                                            @endforeach
                                                                           
                                                                            <tr>
                                                                                <td>&nbsp;</td>
                                                                                <td colspan="2">
                                                                                    <p>
                                                                                        <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                                                        Amount of Money<br>
                                                                                        Change<br>
                                                                                    </p>
                                                                                    
                                                                                </td>			
                                                                                <td>
                                                                                    <p>
                                                                                       <h5 class="text-success"><strong>PHP {{ number_format($reports->total_amount,2) }}</strong></h5>
                                                                                       PHP {{ number_format($reports->amount,2) }} <br>
                                                                                       PHP {{ number_format( $reports->amount - $reports->total_amount,2) }}<br>
                                                                                    </p>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                    <div class="invoice-footer">
                                                        Thank you for your Business.
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

    

    

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>