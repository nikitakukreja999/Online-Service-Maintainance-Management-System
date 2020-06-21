<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>

    <!---Bootstrap CSS-->
   <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Font awesome CSS-->
<link rel="stylesheet" href="../css/all.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="../css/custom.css">


</head>
<body>


   <nav class="navbar navbar-dark fixed-top bg-danger
flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="Dashboard.php">OSMS</a></nav>

<div class="container-fluid" style="margin-top:40px;">
   <div class="row">    <!-- Start Row -->
   <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">  <!-- Side bar-->
    <div class="sidebar-sticky">
   <ul class="nav flex-column">
   <li class="nav-item">
   <a class="nav-link <?php if(PAGE=='Dashboard'){ echo 'active';} ?>" href="Dashboard.php">
   <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='Work'){ echo 'active';} ?>" href="Work.php">
   <i  class="fab fa-accessible-icon"></i>Work Order</a></li>
   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='Request'){ echo 'active';} ?>" href="Request.php">
   <i class="fas fa-align-center"></i>Requests</a></li>

   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='Assets'){ echo 'active';} ?>" href="Assets.php">
   <i class="fas fa-database"></i>Assets</a></li>
   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='Technician'){ echo 'active';} ?>" href="Technician.php">
   <i class="fab fa-teamspeak"></i>Technician</a></li>

   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='Requester'){ echo 'active';} ?>" href="Requester.php">
   <i class="fas fa-users"></i>Requester</a></li>

   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='SellReport'){ echo 'active';} ?>" href="SoldProductReport.php">
   <i class="fas fa-table"></i>Sell Report</a></li>

   <li class="nav-item"><a class="nav-link  <?php if(PAGE=='WorkReport'){ echo 'active';} ?>" href="WorkReport.php">
   <i class="fas fa-align-center"></i>Work Report</a></li>



   <li class="nav-item"><a class="nav-link <?php if(PAGE=='ChangePass'){ echo 'active';} ?>" href="ChangePass.php">
   <i class="fas fa-key"></i>Change Password</a></li>

   <li class="nav-item"><a class="nav-link" href="../logout.php">
   <i class="fas fa-sign-out-alt"></i>Logout</a></li>
   </ul>
   </div>
   </nav>   <!--- End side bar 1st column -->