
<?php

include('dbConnection.php');

if(isset($_REQUEST['send'])){

if(($_REQUEST['name']="" ) || ($_REQUEST['subject']="" ) || ($_REQUEST['email']="" ) || ($_REQUEST['message']="" ) ){


    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';


}else{


    $name = $_REQUEST['name'];
    $subject =$_REQUEST['subject'];
    $email = $_REQUEST['email'];
    $message =$_REQUEST['message'];

    $sql="INSERT INTO `tblcontact`( `user_name`, `user_email`, `subject`, `content`) VALUES ('$name','$email','$subject','$message');
if($conn->query($sql)==TRUE)
{
    $regmsg= '<div class="alert alert-success mt-2" role="alert">Message Successfully Send </div>';
}
else{
    $regmsg= '<div class="alert alert-danger mt-2" role="alerts">Unable to Send Message </div>';
}


    }
}

?>

<!-- Start Contact Us Row -->
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
<input type="submit" class="btn btn-primary" value="Send" name="send"><br><br>
</form>
</div>