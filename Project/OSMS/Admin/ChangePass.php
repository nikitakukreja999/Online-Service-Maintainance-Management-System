<?php
define('TITLE','Change Password');
define('PAGE','ChangePass');

include('../dbConnection.php');
include('includes/header.php');


session_start();
if($_SESSION['is_adminlogin'])
{
    $aEmail=$_SESSION['aEmail'];
   
}
else{
    echo "<script> location.href='login.php'</script>";
}

$aEmail = $_SESSION['aEmail'];
$sql="SELECT a_password,a_email FROM adminlogin_tb WHERE a_email='$aEmail'";

$result = $conn->query($sql);
if($result->num_rows==1){
    $row= $result->fetch_assoc();
    $aPassword= $row['a_password'];
   // echo $rName;

}

if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['aPassword']==""){
        $passmsg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }
    else
    {
        $aPassword = $_REQUEST['aPassword'];
       // echo $rName;
        $sql="UPDATE adminlogin_tb SET a_password='$aPassword' WHERE a_email='$aEmail'";
        if($conn->query($sql)==TRUE)
        {
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        }
        else{
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Unable to update</div>';
        }
    }
}
?>



   <div class="col-sm-6 mt-5">    <!--- Profile Area -->
   <form action="" method="POST" class="mx-5">
   <div class="form-group">
   <label for="aEmail">Email</label>
   <input type="email" class="form-control"
   name="aEmail" id="aEmail" value="<?php echo $aEmail ?>" readonly >
   </div>

   <div class="form-group">
   <label for="aPassword">Name</label><input type="password"
   class="form-control" name="aPassword" id="aPassword" value="<?php echo $aPassword ?>">
   </div>
   
   <button type="submit" class="btn btn-danger"
   name="passupdate">Update</button>

   <?php if(isset($passmsg)){
       echo $passmsg;
   } ?>
   </form>
    </div>
?>

<?php
include('includes/Footer.php')
?>
