<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>CHub</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('lime/theme/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lime/theme/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('lime/theme/assets/css/lime.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lime/theme/assets/css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <div class="header w-100 p-3 d-flex justify-content-around">
        <div class="title">
            <h1>CHub</h1>
        </div>
        <div class="navbar d-flex">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">UMKM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bansos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="content w-90 h-90 d-flex justify-content-center p-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="https://www.shutterstock.com/image-photo/teambuilding-activity-stick-hands-colleagues-260nw-1035764212.jpg"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://www.shutterstock.com/image-photo/teambuilding-activity-stick-hands-colleagues-260nw-1035764212.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://www.shutterstock.com/image-photo/teambuilding-activity-stick-hands-colleagues-260nw-1035764212.jpg"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="{{ asset('lime/theme/assets/plugins/jquery/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/js/lime.min.js') }}"></script>
    <script src="{{ asset('lime/theme/assets/js/pages/dashboard.js') }}"></script>
</body>

</html>
