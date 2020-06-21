<?php
define('TITLE','Update Product');
define('PAGE','Assets');

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


?>


<!-- Start 2nd column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Update Product Details</h3>


    <?php 

if(isset($_REQUEST['edit']))
{
    $sql="select *from assets_tb where pid={$_REQUEST['id']}";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    
}

if(isset($_REQUEST['pupdate'])){
    if(($_REQUEST['pname']=="") || ($_REQUEST['pdop']=="")|| ($_REQUEST['pavail']=="")  || ($_REQUEST['ptotal']=="")  ($_REQUEST['poriginalcost']=="") 
    ($_REQUEST['psellingcost']=="")  ){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }
    else{
        
        $pid = $_REQUEST['pid'];
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pavail=$_REQUEST['pavail'];
        $ptotal=$_REQUEST['ptotal'];
        $psellingcost=$_REQUEST['psellingcost'];
        $poriginalcost=$_REQUEST['poriginalcost'];
    $sql="UPDATE assets_tb  SET pname='$pname', pdop='$pdop',pavail='$pavail',ptotal='$ptotal',porginalcost='$poriginalcost',psellingcost='$psellingcost'";
        if($conn->query($sql)==TRUE)
        {
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        }
        else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update/div>';
        }
    }
}
    ?>



        <form action="" method="POST">

            <div class="form-group">
                <label for="pid">Product ID</label>
                <input type="text" class="form-control" name="pid"
                id="pid"  value="<?php if(isset($row['pid']))
            { echo $row['pid']; } ?>" readonly >
            </div>

            <div class="form-group">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" name="pname"
                id="pname" value="<?php if(isset($row['pname']))
            { echo $row['pname']; } ?>">
            </div>

            <div class="form-group">
                <label for="pdop">Date of Purchase</label>
                <input type="date" class="form-control" name="pdop"
                id="pdop" value="<?php if(isset($row['pdop']))
            { echo $row['pdop']; } ?>" >
            </div>

            <div class="form-group">
                <label for="pavail">Available</label>
                <input type="text" class="form-control" name="pavail"
                id="pavail" onkeypress="isInputNumber(event)" value="<?php if(isset($row['pavail']))
            { echo $row['pavail']; } ?>">
            </div>


            <div class="form-group">
                <label for="ptotal">Total</label>
                <input type="text" class="form-control" name="ptotal"
                id="ptotal" onkeypress="isInputNumber(event)"  value="<?php if(isset($row['ptotal']))
            { echo $row['ptotal']; } ?>">
            </div>

            
            <div class="form-group">
                <label for="poriginalcost">Original Cost Each</label>
                <input type="text" class="form-control" name="poriginalcost"
                id="poriginalcost" onkeypress="isInputNumber(event)" value="<?php if(isset($row['poriginalcost']))
            { echo $row['poriginalcost']; } ?>">
            </div>

            
            <div class="form-group">
                <label for="psellingcost">Selling Cost Each</label>
                <input type="text" class="form-control" name="psellingcost"
                id="psellingcost"  onkeypress="isInputNumber(event)" value="<?php if(isset($row['psellingcost']))
            { echo $row['psellingcost']; } ?>">
            </div>

            
            

            

            <div class="text-center">
                <button type="submit" class="btn btn-danger" id="pupdate"
                name="pupdate">Update</button>
                <a href="assets.php" class="btn btn-secondary">Close</a>
            </div>
            <?php if(isset($msg)){
            echo $msg;
            } ?>


        </form>
    </div>


 <script>
        function isInputNumber(evt){
            var ch =String.fromCharCode(evt.which);
            if(![/[0-9]/.test(ch))){
                evt.preventDefault();
            }
        }
</script>        
<?php
include('includes/Footer.php')
?>