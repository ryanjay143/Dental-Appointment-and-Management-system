<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment and Pescription</title>
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
   

</head>
<style>
    .modal-header-center {
    text-align: center;
}
</style>

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
                            Dr. {{ Auth::user()->firstname }}
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
                        <div class="col-xl-12 col-lg-7">
                        <form action="{{ url('/dentistAppointmentUpdate/'.$appointment->id) }}" method="post">
                        {!! csrf_field() !!}
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header bg-info py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 text-light display-6">Payment and Prescription</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Patient Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" name="medicationName" id="staticEmail" value="{{ $appointment->user->firstname }} " hidden="">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->user->firstname }} {{ $appointment->user->lastname}}" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Email:</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->user->email}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Phone Number:</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->user->phone_number}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Services:</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->treatment->name}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <input type="text" readonly hidden="" class="form-control-plaintext" id="status" name="status" value="3">
                                            </div>
                                        </div>
                                        <div class="container">
                                            <table class="table text-start">
                                                <thead class="table-info">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Services</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($showTreatment as $showTreatments)
                                                    <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>
                                                            <input type="text" name="service" value="{{ $showTreatments->Service }}" hidden="">
                                                            {{ $showTreatments->Service }}
                                                        </td>
                                                        <td>
                                                            <input type="text" name="price" value="{{ $showTreatments->price }}" hidden="">
                                                            {{ $showTreatments->price }}
                                                        </td>
                                                        <td>
                                                            <a href="{{ url('deleteService/'.$showTreatments->id) }}" type="button" class="btn btn-danger btn-sm text-capitalize">delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <div class="container text-center">
                                                <div class="row ">
                                                    <div class="col text-start">
                                                        <div class="mb-3">
                                                            <label for="exampleFormControlTextarea1"  class="form-label text-start fw-bold">Remarks</label>
                                                            <textarea class="form-control" id="remarks" name="remarks" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col align-self-end">
                                                        <div class="mb-3 row">
                                                            <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Total: </label>
                                                            <div class="col-sm-10">
                                                                <input type="text" hidden="" class="form-control-plaintext" name="total" id="staticEmail" value="{{$total}}">
                                                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{number_format($total, 2, '.', '.')}}">
                                                            </div>
                                                        </div><hr>
                                                        
                                                        <button class="btn btn-info text-capitalize btn-sm float-start  me-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-circle-plus"></i> Add Service</button>
                                                        
                                                        

                                                        <!-- Modal -->
                                                        
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-info">
                                                                        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Treatments</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @foreach ($treatment as $treatments)
                                                                        <div class="card me-2 mb-2" style="width: 18rem; display: inline-block;">
                                                                            <img src="{{ asset($treatments->image) }}" class="rounded" width="50" height="50" alt="...">
                                                                          
                                                                                <div class="card-body">
                                                                                <form action="{{ url('addTreatment', $treatments->treatment_id) }}" method="post">
                                                                                @csrf
                                                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="patientName" value="{{ $appointment->user->firstname }}" hidden="">
                                                                                    <p class="card-title">{{$treatments->name}}</p>
                                                                                    <p class="card-title">{{$treatments->price}}</p>
                                                                                    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-circle-plus"></i> Add</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <h3 class="display-6 text-start">List of Medication</h3>
                                                        <table class="table text-start">
                                                            <thead class="table-info">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Medication</th>
                                                                    <th scope="col">Description</th>
                                                                    <th scope="col">Quantity</th>
                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($tambal as $drug)
                                                                    <tr>
                                                                        <th scope="row">{{$loop->iteration}}</th>
                                                                        <td>
                                                                            <input type="text" name="products" value="{{$drug->products}}" hidden="">
                                                                            {{$drug->products}}
                                                                        </td>
                                                                        <td>{{$drug->description}}</td>
                                                                        <td>{{$drug->quantity}}</td>
                                                                        <td>
                                                                            <a href="{{ url ('deleteMedical/'.$drug->id) }}" type="button" class="btn btn-danger btn-sm text-capitalize">delete</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @foreach ($tambal as $drug)
                                                        <button type="button" class="btn  btn-light btn-sm text-capitalize float-start me-2 border border-dark fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$drug->id}}"> <i class="fas fa-print"></i> print prescription</button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="staticBackdrop{{$drug->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <!-- <div class="modal-header" style="text-align: center;">
                                                                        <h1 class="modal-title fs-5 text-center modal-header-center" id="staticBackdropLabel">
                                                                            {{ Auth::user()->firstname }}
                                                                        </h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div> -->
                                                                <div class="modal-body" id="popup-form">
                                                                    <div class="container">
                                                                        <div class="text-center">
                                                                            <p class="text-dark">Dr. {{ Auth::user()->firstname }} {{ Auth::user()->lastname}}, MD <br>
                                                                                Cagayan de Oro City, <br>
                                                                                9000, MD {{ Auth::user()->registration_num}} <hr> 
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="container text-center">
                                                                        <div class="row row-cols-2">
                                                                            <div class="col">
                                                                                <div class="mb-3 row">
                                                                                    <label for="staticEmail" class="col-sm-6 col-form-label fw-bold">Patient Name:</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->user->firstname}} {{ $appointment->user->lastname}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="mb-3 row">
                                                                                    <label for="staticEmail" class="col-sm-6 col-form-label fw-bold">Email:</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->user->email}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="mb-3 row">
                                                                                    <label for="staticEmail" class="col-sm-6 col-form-label fw-bold">Phone Number:</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $appointment->user->phone_number}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="mb-3 row">
                                                                                    <label for="staticEmail" class="col-sm-6 col-form-label fw-bold">Date:</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$date}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container-fluid">
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead class="table-info">
                                                                                        <tr>
                                                                                            <th scope="col">Medicine</th>
                                                                                            <th scope="col">Instructions</th>
                                                                                            <th scope="col">Quantity</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach ($medical as $m)
                                                                                            <tr>
                                                                                                <td>{{$m->products}}</td>
                                                                                                <td>{{$m->description}}</td>
                                                                                                <td>{{$m->quantity}}</td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="container">
                                                                               
                                                                                    <div class="float-end">
                                                                                        <p>Doctor's Signature</p>
                                                                                    </div>
                                                                                
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-info btn-sm" onclick="printPopupForm()">print</button>
                                                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <button type="button" class="btn btn-info btn-sm text-capitalize float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-circle-plus"></i> Add Medication</button>
                                                        <!-- <div class="container">
                                                            <div class="mt-5 float-end">
                                                                <h6 class="text-decoration-underline"> Dr. {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h6>
                                                            </div>
                                                        </div> -->

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg-info">
                                                                        <h1 class="modal-title fs-5 text-light" id="staticBackdropLabel">List of Medication</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        @foreach ($drugs as $drug)
                                                                            <div class="card mb-3 me-2 border border-info" style="width: 18rem; display: inline-block;">
                                                                                <div class="card-body">
                                                                                <form action="{{ url('addDrugs',$drug->id) }}" method="post">
                                                                                @csrf
                                                                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="patientName" value="{{ $appointment->user->firstname }}" hidden="">
                                                                                    <p class="card-title fw-bold">{{$drug->name}}</p>
                                                                                    <p class="card-text">{{$drug->desc}}</p>
                                                                                    <input type="number" class="form-control mb-2 border border-info" name="quantity" value="1" min="1"style="width: 100px; margin-left: 75px;">
                                                                                    <button type="submit" class="btn btn-sm btn-info text-capitalize"><i class="fas fa-circle-plus"></i> Add </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 d-md-block float-end">
                                            <a href="{{ route('dentist.dashboard') }}" class="btn btn-danger btn-sm" type="button">Back</button></a>
                                            <button class="btn btn-info btn-sm" value="Update" type="submit">save</button>
                                        </div>
                                    </form>
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

    <script>
  function printPopupForm() {
    var popupForm = document.getElementById('popup-form');
    popupForm.style.display = 'block';
    window.print();
    popupForm.style.display = 'none';
  }
</script>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>