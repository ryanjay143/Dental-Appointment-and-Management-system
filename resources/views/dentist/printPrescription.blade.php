<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Print Pescription</title>
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

</head>

<body id="page-top">

    @include('sweetalert::alert')

   
    <div class="container-fluid">
        <center>
            <div class="card mt-5" style="width: 50rem;">
                <div class="card-header bg-info p-1">
                    <p class="text-light">Dr. {{ Auth::user()->firstname }} {{ Auth::user()->lastname}}, MD <br>
                    Cagayan de Oro City, <br>
                    9000, MD {{ Auth::user()->registration_num}}   
                    </p>
                </div>
                <div class="card-body">
                    <div class="container text-start">
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Name:</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control col-form-label-sm" id="inputEmail3" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row mb-1">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Phone Number</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control col-form-label-sm" id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control col-form-label-sm" id="inputEmail3">
                                    </div>
                                </div>
                            </div>
                            <div class="col">Date: {{$date}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
        
    </div>
   
    
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>