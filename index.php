<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bagian head berisi meta informasi halaman ini -->
    <title>Perusahaan XYZ</title>

    <!-- Apply Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Style elements custom -->
    <!-- inline > page > css -->
    <link rel="stylesheet" href="assets/css/mystyle.css">

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/chart.js"></script>
</head>

<body>
    <!-- Bagian body berisi struktur dan isi halaman -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-rpl">
            <a class="navbar-brand" href="#">
                <img class="header-img" src="assets/img/logo.png">
                Perusahaan XYZ
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section id="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/img1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/img3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>

    <section id="service">
        <div class="container">
            <div class="section-header">
                <img class="section-img" src="assets/img/services2.png">
                <h2>Our Services</h2>
            </div>

            
            <div class="row">
                <?php
                    include("koneksi.php");
                    $sql = "SELECT judul, keterangan, gambar FROM services;";
                    $hasil = $conn->query($sql);

                    if ($hasil->num_rows >0){
                        while ($service = $hasil->fetch_assoc() ) {
                            echo '<div class="col-md-4">';
                            echo '<h4>' . $service["judul"]. '</h4>';
                            echo '<p>' . $service["keterangan"]. '</p>';
                            echo '<img class="service-img" src="assets/img/'. $service["gambar"] .'">';
                            echo '</div>';
                        }
                    }

                    $conn->close();
                ?>

            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="section-header">
                <img class="section-img" src="assets/img/about2.png">
                <h2>About Us</h2>
            </div>

            <div class="row">
                <p class="section-lead"> Donec varius felis id nibh vulputate, in bibendum ligula placerat. Maecenas et mattis lacus. Duis commodo orci et turpis maximus, ac feugiat magna posuere.
                </p>
                <div class="col-md-6">
                    <h3>Vision & Mission</h3>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquet quis nunc eget rhoncus. Curabitur pretium gravida arcu. Fusce aliquet sagittis tellus, eget rutrum felis luctus sed. Pellentesque vitae sapien sed nibh tincidunt cursus. Vivamus finibus tellus augue, in porta est cursus quis. 
                    <ul>
                        <li>Vision #1</li>
                        <li>Vision #2</li>
                        <li>Vision #3</li>
                </ul>    
                </p>
                </div>
                <div class="col-md-6"> 
                    <h3>Performance</h3>
                    <canvas id="myPerformanceCanvas"></canvas>
                </div>
            </div>
        </div>
    </section>


















    
    <section>Contact</section>
    <footer>Footer</footer>

    <script>
        var xValues = [50,60,70,80,90,100,110,120,130,140,150];
        var yValues = [7,8,8,9,9,9,10,11,14,14,15];

        new Chart("myPerformanceCanvas", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: "Number of Sales",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues
            }]
        },
        options: {
            legend: {display: true},
            scales: {
                yAxes: [{ticks: {min: 0, max:20}}],
            }
        }
        });    
    </script>
</body>

</html>