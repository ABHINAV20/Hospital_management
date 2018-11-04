<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#3498DB;color:white;padding-top:100px;text-align:center;">
    <h3>Patient has been admitted.</h3><br><br>
    <a href="admin-panel.php" class="btn btn-outline-light">Return to admin panel</a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include("func.php");
if(isset($_POST['admit_patient'])){
  $pfname=$_POST['pfname'];
  $plname=$_POST['plname'];
  $pemail=$_POST['pemail'];
  $pcontact=$_POST['pcontact'];
  $admitdate=$_POST['admitdate'];
  $dischargedate=$_POST['dischargedate'];
  $room=$_POST['room'];
  $blood=$_POST['blood'];
  $disease=$_POST['disease'];
  $query="insert into admittb(pfname,plname,pemail,pcontact,admitdate,dischargedate,room,blood,disease) values ('$pfname','$plname','$pemail','$pcontact','$admitdate','$dischargedate','$room','$blood','$disease');";
  $result=mysqli_query($con,$query);
  if($result) {
    header("Location:admit.php");
   
  }
 
}
?>