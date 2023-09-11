<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment</title>
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

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link " href="{{ route ('payment') }}">
                    <i class="fa-sm fw-bold fa-2x">&#8369;</i>
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

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4 mt-5 border border-info">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header bg-light py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 display-6 text-info">Manage Payment</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="container">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active btn btn-info fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Orders</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-info fw-bold" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Services</button>
                                            </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                    <div class="card">
                                                        <div class="table-responsive">
                                                            <div class="card-body">
                                                                <table id="example" class="table">
                                                                    <thead class="table-info">
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Patient Name</th>
                                                                        <th scope="col">Email</th>
                                                                        <th scope="col">Phone</th>
                                                                        <th scope="col">Total Price</th>
                                                                        <th scope="col">Payment Status</th>
                                                                        <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($payment as $pay)
                                                                            <tr>
                                                                                <th scope="row">{{$loop->iteration}}</th>
                                                                                <td>{{$pay->firstname}}</td>
                                                                                <td>{{$pay->email}}</td>
                                                                                <td>{{$pay->phone_number}}</td>
                                                                                <td>&#x20B1;{{number_format($pay->total, 2, '.', '.')}}</td>
                                                                                <td> 
                                                                                    @if ($pay->status == 1)
                                                                                    <span class="badge text-bg-info text-light">Not Paid</span>
                                                                                    @elseif ($pay->status == 2)
                                                                                    <span class="badge text-bg-success text-light">Paid</span>
                                                                                    @endif 
                                                                                </td>
                                                                                <td>
                                                                                <div class="btn-group" role="group" aria-label="Basic example" style="display: inline-block;">
                                                                                    <a href="{{ url('viewOrder/'.$pay->id) }}" class="btn btn-info btn-sm text-capitalize" type="button"><i class="fas fa-eye"></i></a>
                                                                                    <button class="btn btn-success btn-sm text-capitalize" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pay->id}}">Paid now</button>

                                                                                    <!-- Modal -->
                                                                                        <div class="modal fade" id="exampleModal{{$pay->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                                            <div class="modal-dialog">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header bg-info">
                                                                                                        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Payment Information</h1>
                                                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                    <form action="{{ url('payment_details/'.$pay->id) }}" method="post">
                                                                                                        @csrf
                                                                                                        <input type="hidden" name="order_id" value="{{ $pay->id }}">
                                                                                                        <label for="payment_method">Payment Method:</label>
                                                                                                        <select class="form-select mb-3 payment-method-dropdown" aria-label="Default select example" name="payment_method" id="payment_method_unique_id_1">
                                                                                                            <option value="cash">Cash</option>
                                                                                                            <option value="gcash">GCash</option>
                                                                                                        </select>
                                                                                                        <div class="reference-input" style="display: none;">
                                                                                                            <label for="reference">Reference:</label>
                                                                                                            <input class="form-control mb-3" type="text" name="reference" id="reference">
                                                                                                        </div>
                                                                                                        <div class="mb-3">
                                                                                                            <label for="formGroupExampleInput2" class="form-label">Patient Name</label>
                                                                                                            <input type="text" class="form-control" id="name" readonly name="name" value="{{ $pay->firstname }}">
                                                                                                        </div>
                                                                                                        <div class="mb-3">
                                                                                                            <label for="formGroupExampleInput2" class="form-label">Total Price</label>
                                                                                                            <input type="text" class="form-control" id="totalAmount" hidden="" name="totalAmount" value="{{ $pay->total }}">
                                                                                                            <input type="text" class="form-control" readonly value="&#8369; {{ number_format($pay->total, 2, '.', '.') }}">
                                                                                                        </div>
                                                                                                        <div class="input-group mb-3">
                                                                                                            <span class="input-group-text">&#x20B1;</span>
                                                                                                            <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter an Amount" aria-label="Amount (to the nearest dollar)" required>
                                                                                                            <span class="input-group-text">.00</span>
                                                                                                            @if(session('error'))
                                                                                                                <div class="alert alert-danger">
                                                                                                                    {{ session('error') }}
                                                                                                                </div>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                        <input type="hidden" class="form-control" id="status" name="status" value="2">
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                                                                            <button type="submit" class="btn btn-info btn-sm">Save payment</button>
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
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table id="examples" class="table">
                                                                    <thead class="table-info">
                                                                        <tr>
                                                                        <th scope="col">#</th>
                                                                        <th scope="col">Dentist Name</th>
                                                                        <th scope="col">Patient Name</th>
                                                                        <th scope="col">Services</th>
                                                                        <th scope="col">Total Amount</th>
                                                                        <th scope="col">Payment Status</th>
                                                                        <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($services as $service)
                                                                            <tr>
                                                                                <th scope="row">{{$loop->iteration}}</th>
                                                                                <td>Dr. {{$service->doctorName}}</td>
                                                                                <td>{{$service->patientName}}</td>
                                                                                <td>{{$service->services}}</td>
                                                                                <td>&#x20b1; {{number_format($service->total, 2, '.','.')}}</td>
                                                                                <td>
                                                                                    @if ($service->status == 1)
                                                                                        <span class="badge text-bg-success text-light">Paid</span>
                                                                                    @else ($service->status == 0)
                                                                                        <span class="badge text-bg-info text-light">Not Paid</span>
                                                                                    @endif
                                                                                </td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-success btn-sm {{$service->status == 1 ? 'disabled' : ''}}" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$service->id}}">Paid Now</button>

                                                                                    <!-- Modal -->
                                                                                    <div class="modal fade" id="staticBackdrop{{$service->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header bg-info">
                                                                                                    <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel">Payment Details</h1>
                                                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                <form action="{{ url('service_payment/'.$service->id) }}" method="post">
    @csrf
    <select class="form-select mb-3 payment-method-dropdown" aria-label="Default select example" name="paymentService" id="payment_method_unique_id_1">
        <option selected disabled required>Select Payment Method</option>
        <option value="cash">Cash</option>
        <option value="gcash">GCash</option>
    </select>

    <div class="mb-3 reference-input" style="display: none;">
        <label for="formGroupExampleInput" class="form-label">Enter Reference or OR #</label>
        <input type="text" class="form-control" id="reference" name="reference" placeholder="Example: 10012">
    </div>

    <div class="mb-3" hidden>
        <label for="formGroupExampleInput" class="form-label">Doctor</label>
        <input type="text" class="form-control" id="doctorname" name="doctorname" value="{{$service->doctorName}}">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Patient Name</label>
        <input type="text" readonly class="form-control" id="patientname" name="patientname" value="{{$service->patientName}}">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Services</label>
        <input type="text" readonly class="form-control" id="service" name="service" value="{{$service->services}}">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Total Amount</label>
        <input type="text" hidden class="form-control" id="total" name="total" value="{{$service->total}}">
        <input type="text" readonly class="form-control" value="&#8369; {{number_format($service->total, 2, '.', '.')}}" id="display_total">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">&#x20B1;</span>
        <input type="text" class="form-control" name="serviceAmount" id="serviceAmount" placeholder="Enter an Amount" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
    </div>

    <select class="form-select mb-3" aria-label="Default select example" id="status" name="status" hidden>
        <option value="1">Paid</option>
    </select>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info btn-sm">Save Payment</button>
    </div>
</form>


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

   
    <script src="/js/reference.js"></script>
   
  

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
   
   
</body>

</html>