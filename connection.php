<?php
$username = "root";
$password = "";
$server = "localhost";
$db = "user_db";

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
    echo " ";
 /* ?>
<script>
alert('connection sucessful');
 </script>
  <?php */
}
else
{
    echo "connection not sucessful";
   // die("connection not succesful".mysqli_connect_error());
}
//?>


