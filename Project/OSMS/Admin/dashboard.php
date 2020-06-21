<?php
define('TITLE','Dashboard');
define('PAGE','Dashboard');

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


$sql ="SELECT max(request_id) FROM submitrequest_tb ";
$result = $conn->query($sql);
$row =mysqli_fetch_row($result);
$submitrequest =$row[0];

$sql ="SELECT max(rno) FROM assignwork_tb ";
$result = $conn->query($sql);
$row =mysqli_fetch_row($result);
$assignwork =$row[0];

$sql ="SELECT * FROM technician_tb ";
$result = $conn->query($sql);
$row =mysqli_fetch_row($result);
$totaltech =$row[0];



?>





   <div class="col-sm-9 col-md-10">  <!--- start dashboard 2nd column -->

    <div class="row text-center mx-5">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3"
            style="max-width:18rem;">
                <div class="card-header">Requests Received</div>
                    <div class="card-body">
                    <h4 class="card-title"> <?php echo $submitrequest;  ?></h4>
                    <a class="btn text-white" href="Request.php">View</a>

                    </div>

            </div>
        </div>

        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3"
            style="max-width:18rem;">
                <div class="card-header">Assigned Work</div>
                    <div class="card-body">
                    <h4 class="card-title"><?php echo $assignwork;  ?></h4>
                    <a class="btn text-white" href="Work.php">View</a>

                    </div>
                </div>
            </div>

        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3"
            style="max-width:18rem;">
                <div class="card-header">No. of Technician</div>
                    <div class="card-body"> 
                    <h4 class="card-title"><?php echo $totaltech;  ?></h4>
                    <a class="btn text-white" href="atechnician.php">View</a>

                    </div>
                </div>
            </div>
        </div>
    <div class="mx-5 mt-5 text-center">
        <P class="bg-dark text-white">List of Requesters</p>
        
        <?php

        $sql="SELECT * FROM requesterlogin_tb";
        $result=$conn->query($sql);

        if($result->num_rows >0)
        {
            echo ' <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Requester ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>

                    </tr>
                </thead>

                <tbody>';
                while($row = $result->fetch_assoc()){


                    echo '<tr>';
                    echo  '<td>'.$row["r_login_id"].'</td>';
                    echo  '<td>'.$row["r_name"].'</td>';
                    echo  '<td>'.$row["r_email"].'</td>';

                    echo '</tr>';
                }
                echo '</tbody>

            </table>';
        }

        else{
            echo '0 Result';
        }

        ?>
                        

    
    </div>

   </div>  <!--  End dashboard 2nd column -->

  <?php
  include('includes/Footer.php');
  ?>
</body>
</html>