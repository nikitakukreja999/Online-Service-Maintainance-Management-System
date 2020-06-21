<?php
define('TITLE','Update Technician');
define('PAGE','Technician');

include('../dbConnection.php');
include('includes/header.php');

session_start();
if(isset($_SESSION['is_adminlogin']))
{
    $aEmail = $_SESSION['aEmail'];
}
else{
    echo "<script> location.href='login.php'</script>";
}

if(isset($_REQUEST['empsubmit'])){
    if(($_REQUEST['empName']=="") || ($_REQUEST['empEmail']=="")|| ($_REQUEST['empMobile']=="")  || ($_REQUEST['empCity']=="")  ){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }
    else{
        
        $eName=$_REQUEST['empName'];
        $eCity=$_REQUEST['empCity'];
        $eMobile=$_REQUEST['empMobile'];
        $eEmail=$_REQUEST['empEmail'];
        $sql="INSERT INTO technician_tb(empName,empCity,empMobile,empEmail) VALUES ('$eName','$eCity','$eMobile','$eEmail')";
        if($conn->query($sql)==TRUE)
        {
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">UAdded Successfully</div>';
        }
        else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Add</div>';
        }
    }
}


?>

<!-- Start 2nd column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New technician</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="empName">Name</label>
                <input type="text" class="form-control" name="empName"
                id="empName" >
            </div>

            <div class="form-group">
                <label for="empEmail">City</label>
                <input type="text" class="form-control" name="empCity"
                id="empCity" >
            </div>

            <div class="form-group">
                <label for="empMobile">Mobile</label>
                <input type="text" class="form-control" name="empMobile"
                id="empMobile" >
            </div>


            <div class="form-group">
                <label for="empEmail">Email</label>
                <input type="email" class="form-control" name="empEmail"
                id="empEmail" >
            </div>


            

            <div class="text-center">
                <button type="submit" class="btn btn-danger" id="empsubmit"
                name="empsubmit">Submit</button>
                <a href="Technician.php" class="btn btn-secondary">Close</a>
            </div>
            <?php if(isset($msg)){
            echo $msg;
            } ?>


        </form>
    </div>

            

<?php
include('includes/Footer.php')
?>