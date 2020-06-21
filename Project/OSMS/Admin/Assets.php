<?php
define('TITLE','Assets');
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
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2">Product/Part Details</p>
        <?php
        $sql="SELECT *from assets_tb";
        $result=$conn->query($sql);
        if($result->num_rows >0){
            echo '<table class="table">';
                echo '<thead>';
                    echo '<tr>';
                    
                    echo '<th scope="col">Product ID</th>';
                    echo '<th scope="col">Name</th>';
                    echo '<th scope="col"><DOP</th>';
                    echo '<th scope="col">Available</th>';
                    echo '<th scope="col">Total</th>';
                    echo '<th scope="col">Original Cost</th>';
                    echo '<th scope="col">Selling Cost Each</th>';
                    echo '<th scope="col">Action</th>';
               
                    echo '</tr>';
                 echo '</thead>';

        echo '<tbody>';

         while($row =$result->fetch_assoc())
         {
            echo '<tr>';
            echo '<td>'.$row['pid'].'</td>';
            echo '<td>'.$row['pname'].'</td>';
            echo '<td>'.$row['pdop'].'</td>';
            echo '<td>'.$row['pavail'].'</td>';
            echo '<td>'.$row['ptotal'].'</td>';
            echo '<td>'.$row['poriginalcost'].'</td>';
            echo '<td>'.$row['psellingcost'].'</td>';

            echo '<td>';
                echo '<form action="editproduct.php" method="POST" class="d-inline mr-2">';

                echo '<input type="hidden" name="id" value='.$row['pid'].'><button class="btn btn-info" name="edit" value="Edit" type="submit" class="btn btn-info mr-3"><i class="fas fa-pen"></i></button>';

                echo '</form>';


                echo '<form action="" method="POST" class="d-inline">';

                echo '<input type="hidden" name="id" value='.$row['pid'].'><button class="btn btn-secondary mr-3" name="delete" value="Delete" type="submit"><i class="far fa-trash-alt"></i></button>';

                echo '</form>';


                echo '<form action="sellproduct.php" method="POST" class="d-inline">';

                echo '<input type="hidden" name="id" value='.$row['pid'].'><button class="btn btn-warning mr-3" name="issue" value="Issue" type="submit"><i class="fas fa-handshake"></i></button>';

                echo '</form>';


            echo '</td>';
           
        echo '</tr>';
            echo '<tr>';

         }


         echo '</tbody>';
        echo '</table>';
        }
        else{
            echo '0 Result';
        }
        if(isset($_REQUEST['delete'])){
        $sql="DELETE FROM assets_tb WHERE pid={$_REQUEST['id']}";
        if($conn->query($sql)==TRUE)
        {
    
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted"/>';
        }
        else{
            echo "Unable to delete data";
        }
        }
        ?>

    </div>
    </div>

    <div class="float-right" ><a href="addproduct.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>
   </div> <!-- End Container --> 

   <!----- JavaScript -->
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/all.min.js"></script>

</body>
</html>

