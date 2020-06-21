<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/all.min.css">
<!-- Google Font CSS -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">



<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">


    <title>OSMS</title>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">OSMS</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>

    <button type="button" class="navbar-toggler"
    data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php"
        class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services"
        class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration"
        class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="loginwindow.php"
        class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact"
        class="nav-link">Contact</a></li>
</ul>
</div>

</nav> <!-- End Navigation -->

<!--- Start Header Jumbotron -->
<header class="jumbotron back-image" style="background-image:url(images/Banner10.jpeg);">
<div class="myclass mainHeading">
    <h1 class="text-uppercase text-danger  font-weight-bold">Welcome to OSMS</h1>
    <p class="text-black-50 font-italic">Customer's Happiness is our Aim</p>
    <a href="loginwindow.php" class="btn btn-success mr-4">Login</a>
    <a href="#registration" class="btn btn-danger    mr-4">Sign Up</a>


</header>

<div class="container">
    <div class="jumbotron">
        <h3 class="text-center">OSMS Services </h3>
        <p>
            OSMS Services is India's leading chain of multi-brand Electronics and Electrical service workshops offering wide array of services. We focus on enhancing your uses experience by offering world-class Electronic appliances maintainance services. Our sole mission is "TO provide Electronic APpliances care services to keep the devices fit and healthy and customers happy and smiling".

            with well-equipped Electronic Appliances service centres and fully trained mechanics, we provide quality services with excellent packages that are designed to offer you great savings.


            Out state-of-art workshops are conveniently located in many cities across the country. Now you can service online by doing Registration.
</p>
</div>
</div>
<!-- Start Services Section -->
<div class="container text-center border-bottom" id="Services">
<h2>Our services</h2>
    <div class="row mt-4">
        <div class="col-sm-4">
            <a href="#"><i class="fas fa-tv fa-8x"></i></a>
            <h4 class="mt-4">Electronics Appliances</h4>
</div>
<div class="col-sm-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x"></i></a>
            <h4 class="mt-4">Preventive Maintainance</h4>
</div>

<div class="col-sm-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
</div>


<!-- Start Registration Form -->

<?php include('UserRegistration.php') ?>
<!--- End Registration Form Container -->


<!-- Start Happy Customer -->
<div class="jumbotron bg-danger">
    <div class="container">
        <h2 class="text-center text-white">Happy Customers</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="images/avtar1.jpg" class="img-fluid"
                        style="border-radius:100px;" alt="avt1">
                        <h4 class="card-title">Sonam Sharma</h4>
                    </div>
                </div>
            </div>  <!--End 1st column-->

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="images/avtar2.jpg" class="img-fluid"
                        style="border-radius:100px;" alt="avt2">
                        <h4 class="card-title">Rahul Kumar</h4>
                        
                    </div>
                </div>
            </div>  <!--End 2nd column-->

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="images/avtar3.jpg" class="img-fluid"
                        style="border-radius:100px;" alt="avt3">
                        <h4 class="card-title">Summit Vyas</h4>
                        
                    </div>
                </div>
            </div>  <!--End 3rd column-->

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body">
                        <img src="images/avtar4.jpg" class="img-fluid"
                        style="border-radius:100px;" alt="avt4">
                        <h4 class="card-title">Jyoti Sinha</h4>
                        
                    </div>
                </div>
            </div>  <!--End 4th column-->
</div>
</div>
</div><!--- End happy customer -->


            <!-- Start Contact Us --->
            <div class="container" id="Contact">
                <h2 class="text-center mb-4">Contact Us</h2>
                <div class="row">
                    <div class="col-md-8">  <!--Start 1st column-->
                    <form action="" method="POST">
                        <input type="text"   class="form-control"
 name="name" placeholder="Name"><br>

 <input type="text"   class="form-control"
 name="subject" placeholder="Subject"><br>

 <input type="text"   class="form-control"
 name="email" placeholder="Email"><br>

 <input type="textarea"   class="form-control"
 name="message" placeholder="How can we help you?" style="height: 150px ;"><br>
 <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
</div>
<div class="col-md-4 text-center"> <!--Start of 2nd column -->
<strong>Headquarter:</strong><br>
OSM pv Ltd,<br>
Ashok Nagar, Ranchi<br>
Tharkhand - 434567<br>
Phone: +02582240032<br>

<a href="#" target="_blank">www.osms.com</a><br><br><br>

<strong>Branch:</strong><br>
OSM pv Ltd,<br>
New Ashok Nagar, Delhi<br>
Delhi - 564567<br>
Phone: +02582240762<br>

<a href="#" target="_blank">www.osms.com</a><br>


        </div>
    </div>
</div>  <!---- End Contact Us --->

<footer class="container-fluid bg-dark mt-5 text-white">

<div class="container">
    <div class="row py-3">
        <div class="col-md-6">  <!--- Start 1st column -->
        <span class="pr-2">Follow Us: </span>
        <a href="#" target="_blank" class="pr-2 fi-color">
            <i class="fab fa-facebook-f"></i></a>

            <a href="#" target="_blank" class="pr-2 fi-color">
            <i class="fab fa-twitter"></i></a>

            <a href="#" target="_blank" class="pr-2 fi-color">
            <i class="fab fa-youtube"></i></a>

            <a href="#" target="_blank" class="pr-2 fi-color">
            <i class="fab fa-google-plus-g"></i></a>

            <a href="#" target="_blank" class="pr-2 fi-color">
            <i class="fas fa-rss"></i></a>

</div> <!--- ENd 1st column -->
<div class="col-md-6 text-right"><!--- Start 2nd column -->
<small> Designed by Nikita Kukreja &copy; 2020</small>
<small class="m1-2 text-right"><a href="#">Admin Login</a></small>
</div> <!-- ENd of 2nd column -->

</footer>


  


<!----- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

    
</body>
</html>