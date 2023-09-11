<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dental Products</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders') }}">
                <i class="fa-solid fa-bag-shopping"></i>
                    <span>Orders</span></a>
            </li>

             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
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

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-5 mt-5">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-info">Dental Products</h6>
                                    <a href="{{ route('add.products') }}" type="button" class="btn btn-info text-capitalize fw-bold btn-sm"><i class="fas fa-plus-circle"></i> Add Products</a>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table id="example" class="table">
                                        <thead class="table-info">
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Available Stock</th>
                                            <!-- <th scope="col">Add Stock</th> -->
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{ $product->name}}</td>
                                                    <td>
                                                        <img src="{{ asset($product->image) }}" class="card-img-top" style="height: 8vh; width: 35%;" alt="...">
                                                    </td>
                                                    <td>&#8369; {{ $product->price }}</td>
                                                    
                                                       
                                                        <td>
                                                            {{ $totalQuantityById[$product->id] ?? 0 }}
                                                        </td>
                                                        <!-- <td>
                                                            <input type="number" class="form-control" min="0" style="width: 100px;" name="stock" id="stock" value="0">
                                                        </td> -->
                                                    <td>
                                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $product->id }}"><i class="fas fa-pen"></i></button>
                                                        <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Details</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('product.details') }}" method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                            <p class="fw-bold">Total Available Stocks: {{ $totalQuantityById[$product->id] ?? 0 }}</p>
                                                                            <div class="container">
                                                                                <div class="card mb-5" style="width: 28rem;">
                                                                                    <div class="card-body">
                                                                                        <div class="mb-3">
                                                                                            <label for="product_name" class="form-label">Product Name</label>
                                                                                            <input type="text" class="form-control" id="product_name" readonly value="{{ $product->name }}">
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label for="exp_date" class="form-label">Expiration Date</label>
                                                                                            <input type="date" class="form-control" id="exp_date" name="exp_date" placeholder="Expiration Date" required>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label for="qty" class="form-label">Input Stocks</label>
                                                                                            <input type="number" class="form-control" id="qty" name="qty" min="1" value="1" placeholder="Quantity" required>
                                                                                        </div>
                                                                                        <div class="d-grid gap-2">
                                                                                            <button class="btn btn-info btn-sm" type="submit"><i class="bi bi-plus-circle"></i> Add Stock</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <!-- Table for Product Details -->

                                                                        <table class="table table-bordered">
                                                                            <thead class="table-info">
                                                                                <tr>
                                                                                    <th scope="col">Batch No.</th>
                                                                                    <th scope="col">Expiration Date</th>
                                                                                    <th scope="col">Date Re-Stock</th>
                                                                                    <th scope="col">Available Stocks</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                @if (count($productDetails[$product->id]) === 0)
                                                                                    <tr>
                                                                                        <td class="text-center" colspan="4">No Product Details Available</td>
                                                                                    </tr>
                                                                                @else
                                                                                    @foreach ($productDetails[$product->id] as $detail)
                                                                                        <tr>
                                                                                            <td>{{ $loop->iteration }}</td>
                                                                                            <td>{{ date("F d, Y", strtotime($detail->exp_date)) }}</td>
                                                                                            <td>{{ date("F d, Y", strtotime($detail->created_at)) }}</td>
                                                                                            <td>{{ $detail->qty }}</td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                @endif
                                                                            </tbody>
                                                                        </table>

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

    <script>
    function addInputField() {
        var inputFields = document.getElementById('input-fields');

        var newField = document.createElement('div');
        newField.classList.add('col-md-2', 'mb-3');

        var label = document.createElement('label');
        label.setAttribute('for', 'formGroupExampleInput');
        label.classList.add('form-label');
        label.textContent = 'Example label';

        var input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('name', 'input[]');
        input.classList.add('form-control');
        input.setAttribute('placeholder', 'Example input placeholder');

        newField.appendChild(label);
        newField.appendChild(input);

        inputFields.appendChild(newField);
    }

    function removeInputField() {
        var inputFields = document.getElementById('input-fields');
        var lastField = inputFields.lastChild;

        if (lastField) {
            inputFields.removeChild(lastField);
        }
    }
</script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>