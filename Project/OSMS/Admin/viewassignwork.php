<?php
define('TITLE','Work Order');
define('PAGE','Work');

include('includes/header.php');
include('../dbConnection.php');

session_start();
if($_SESSION['is_adminlogin']){
    $rEmail =$_SESSION['aEmail'];

}
else{
    echo "<script> location.href='login.php'</script>";

}

?>

<!--- Start 2nd column -->
<div clas="col-sm-9 mt-5 mx-3">
    <h3 class="text-center mt-5">Assigned Work Details </h3>
    <?php
        if(isset($_REQUEST['view'])){

        $sql="SELECT * from assignwork_tb where request_id= {$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();  ?>

<table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Request Id</th>
                    <td><?php if(isset($row['request_id'])){
                        echo $row['request_id'];}
                        ?></td>
                </tr>
                <tr>

                    <th>Request Info</th>
                    <td><?php if(isset($row['request_info'])){
                        echo $row['request_info'];}
                        ?></td>
                </tr>

               <tr>

                    <th>Request Description</th>
                    <td><?php if(isset($row['request_desc'])){
                        echo $row['request_desc'];}
                        ?></td>
                </tr>

                <tr>

                    <th>Name</th>
                    <td><?php if(isset($row['requester_name'])){
                        echo $row['requester_name'];}
                        ?></td>
                </tr>

               <tr>

                    <th>Address Line 1</th>
                    <td><?php if(isset($row['requester_add1'])){
                        echo $row['requester_add1'];}
                        ?></td>
                </tr>

               <tr>
                    <th>Address Line 2</th>
                    <td><?php if(isset($row['requester_add2'])){
                        echo $row['requester_add2'];}
                        ?></td>
                </tr>


                <tr>
                    <th>City</th>
                    <td><?php if(isset($row['requester_city'])){
                        echo $row['requester_city'];}
                        ?></td>
                </tr>

                <tr>
                    <th>State</th>
                    <td><?php if(isset($row['requester_state'])){
                        echo $row['requester_state'];}
                        ?></td>
                </tr>

                <tr>
                    <th>Pin Code></th>
                    <td><?php if(isset($row['requester_zip'])){
                        echo $row['requester_zip'];}
                        ?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php if(isset($row['requester_email'])){
                        echo $row['requester_email'];}
                        ?></td>
                </tr>

                <tr>
                    <th>Mobile</th>
                    <td><?php if(isset($row['requester_mobile'])){
                        echo $row['requester_mobile'];}
                        ?></td>
                </tr>

                <tr>
                    <th>Assigned Date</th>
                    <td><?php if(isset($row['assign_date'])){
                        echo $row['assign_date'];}
                        ?></td>
                </tr>

                <tr>
                    <th>Technician Name</th>
                    <td><?php if(isset($row['assign_tech'])){
                        echo $row['assign_tech'];}
                        ?></td>
                </tr>

                <tr>
                    <th>Customer Sign</th>
                    <td></td>
                </tr>

                <tr>
                    <th>Technician Sign</th>
                    <td></td>
                </tr>



                
            </tbody>
        </table>

        <div class="text-center">
            <form action="Work.php" class="mb-3 d-print-none">
                <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
                <input class="btn btn-secondary" type="submit" value="Close">

                </form>

            </div>



        <?php } ?>
</div>

<!--- End 2nd column -->



<?php
include('includes/Footer.php')
?>
