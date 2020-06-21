<?php
define('TITLE','Sell Product');
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
    if(($_REQUEST['cname']=="") || ($_REQUEST['cadd']=="")|| ($_REQUEST['pname']=="")  || ($_REQUEST['pquantity']=="") || ($_REQUEST['totalcost']=="") || ($_REQUEST['psellingcost']=="") 
    
    || ($_REQUEST['selldate']=="")  ){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
    }
    else{
        
        $pid=$_REQUEST['pid'];
        $pname=$_REQUEST['pname'];
        $cname=$_REQUEST['cname'];
        $pavail=$_REQUEST['pavail']-$_REQUEST['pquantity'];
        $cpquantity =$_REQUEST['pquantity'];

        $cpdate=$_REQUEST['selldate'];
        $custadd=$_REQUEST['cadd'];
        $cptotal=$_REQUEST['totalcost'];
        $cpeach=$_REQUEST['psellingcost'];
        

              
        $sql="INSERT INTO customer_tb( custname,custadd,cpname,cpquantity,cpeach,cptotal,cpdate) VALUES ('$cname','$custadd','$pname','$cpquantity',
        '$cpeach','$cptotal','$cpdate')";
        if($conn->query($sql)==TRUE)
        {
            $genid=mysqli_insert_id($conn);
            session_start();
            $_SESSION['myid'] = $genid;
            echo "<script> location.href ='productsellsuccess.php';</script>";
        }

        $sqlup ="UPDATE assets_tb SET pavail = '$pavail' where pid='$pid'";
        $conn->query($sqlup);
        
    }
}

?>


<!-- Start 2nd column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center"> Customer Bill</h3>


    <?php 

if(isset($_REQUEST['issue']))
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
                <label for="cname">Customer Name</label>
                <input type="text" class="form-control" name="cname"
                id="cname" >
            </div>

            <div class="form-group">
                <label for="cadd">Customer Address</label>
                <input type="text" class="form-control" name="cadd"
                id="cadd" >
            </div>

            <div class="form-group">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" name="pname"
                id="pname" value="<?php if(isset($row['pname']))
            { echo $row['pname']; } ?>">
            </div>

            <div class="form-group">
                <label for="pavail">Available</label>
                <input type="text" class="form-control" name="pavail"
                id="pavail" onkeypress="isInputNumber(event)" value="<?php if(isset($row['pavail']))
            { echo $row['pavail']; } ?>" readonly>
            </div>

            
            <div class="form-group">
                <label for="pquantity">Quantity</label>
                <input type="text" class="form-control" name="pquantity"
                id="pquantity" onkeypress="isInputNumber(event)" >
            </div>
            
            
            
            <div class="form-group">
                <label for="psellingcost">Price Each</label>
                <input type="text" class="form-control" name="psellingcost"
                id="psellingcost"  onkeypress="isInputNumber(event)" value="<?php if(isset($row['psellingcost']))
            { echo $row['psellingcost']; } ?>">
            </div>

            <div class="form-group">
                <label for="totalcost">Total Price</label>
                <input type="text" class="form-control" name="totalcost"
                id="totalcost" onkeypress="isInputNumber(event)" >
            </div>

            <div class="form-group col-md-4">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control" name="selldate"
                id="inputDate"  onkeypress="isInputNumber(event)" >
            </div>

            
            

            

            <div class="text-center ">
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