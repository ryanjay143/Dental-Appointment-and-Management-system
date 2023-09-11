<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dentist - Calendar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet"/>

    <!-- Custom fonts for this template-->
    
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
   

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
                <img src="{{ (!empty(Auth::user()->photo))? url('upload/dentist_profile/'.Auth::user()->photo):url('images/avatar/empty.png') }}" class="rounded-circle" height="22" alt="">
                </div>
                <div class="sidebar-brand-text mx-2 ">I am Dentist</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

             <!-- Nav Item - Dashboard -->
             <li class="nav-item ">
                <a class="nav-link" href="{{ route('dentist.dashboard') }}">
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
             <li class="nav-item active">
                <a class="nav-link bg-info" href="{{ route('calendar') }}">
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

                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
                </button> -->

                <!-- Modal -->
                <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Add Apointment</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label text-dark">Patient Name</label>
                                        <input type="text" class="form-control" id="patientName" placeholder="Example input placeholder">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label text-dark">Treatments</label>
                                        <input type="text" class="form-control" id="treatments" placeholder="Another input placeholder">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label text-dark">Choose date and time:</label>
                                        <input type="datetime-local" class="form-control" id="date" placeholder="Another input placeholder">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" hidden="" class="form-control" id="formGroupExampleInput2" value="{{ Auth::user()->firstname }}">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" id="saveBtn" class="btn btn-info btn-sm">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                    <!-- Content Row -->
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="text-dark"></div>
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

   
   
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <script>
        $(document).ready(function() {
            var appointment = @json($events);
            
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay',
                },
                events: appointment,
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDays) {
                    $('#appointmentModal').modal('toggle');

                    // $('#saveBtn').click(function(){
                    //     var patientName = $('#patientName').val();
                    //     console.log(patientName)
                    // });
                }
            })
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>