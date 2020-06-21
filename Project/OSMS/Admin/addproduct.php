<?php
define('TITLE','Add New Product');
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

if(isset($_REQUEST['psubmit'])){
    if(($_REQUEST['pname']=="") || ($_REQUEST['pdop']=="")|| ($_REQUEST['pavail']=="")  || ($_REQUEST['ptotal']=="") || ($_REQUEST['poriginalcost']=="") || ($_REQUEST['psellingcost']=="")  ){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }
    else{
        
        $pname=$_REQUEST['pname'];
        $pdop=$_REQUEST['pdop'];
        $pavail=$_REQUEST['pavail'];
        $ptotal=$_REQUEST['ptotal'];
        $poriginalcost=$_REQUEST['poriginalcost'];
        $psellingcost=$_REQUEST['psellingcost'];
        
        $sql="INSERT INTO assets_tb(pname,pdop,pavail,ptotal,poriginalcost,psellingcost) VALUES ('$pname','$pdop','$pavail','$ptotal',
        '$poriginalcost','$psellingcost')";
        if($conn->query($sql)==TRUE)
        {
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Added Successfully</div>';
        }
        else{
            $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Add</div>';
        }
    }
}


?>

<!-- Start 2nd column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Add New Product</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" name="pname"
                id="pname" >
            </div>

            <div class="form-group">
                <label for="pdop">Date of Purchase</label>
                <input type="date" class="form-control" name="pdop"
                id="pdop" >
            </div>

            <div class="form-group">
                <label for="pavail">Available</label>
                <input type="text" class="form-control" name="pavail"
                id="pavail" onkeypress="isInputNumber(event)">
            </div>


            <div class="form-group">
                <label for="ptotal">Total</label>
                <input type="text" class="form-control" name="ptotal"
                id="ptotal" onkeypress="isInputNumber(event)" >
            </div>

            
            <div class="form-group">
                <label for="poriginalcost">Original Cost Each</label>
                <input type="text" class="form-control" name="poriginalcost"
                id="poriginalcost" onkeypress="isInputNumber(event)" >
            </div>

            
            <div class="form-group">
                <label for="psellingcost">Selling Cost Each</label>
                <input type="text" class="form-control" name="psellingcost"
                id="psellingcost"  onkeypress="isInputNumber(event)">
            </div>

            
            

            

            <div class="text-center">
                <button type="submit" class="btn btn-danger" id="psubmit"
                name="psubmit">Submit</button>
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