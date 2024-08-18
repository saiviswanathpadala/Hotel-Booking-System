<?php


$con=mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}
else{
    echo"No Connection";
}

mysqli_select_db($con,'user_db');
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];

$query="insert into user_info(name,email,mobile,comments)values('$name','$email','$mobile','$comments')";

mysqli_query($con,$query);

header('location:index.php');


?>