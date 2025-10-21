<?php
session_start();
header("location:login.php");
/* connect to database check user*/
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'LoginReg');

/* create variables to store data */
$name =$_POST['user'];
$pass =$_POST['password'];
$sex =$_POST['sex'];


/* select data from DB */
$s="select * from userReg where username='$name'";

/* result variable to store data */
$result = mysqli_query($con,$s);

/* check for duplicate names and count records */
$num =mysqli_num_rows($result);
if($num==1){
    echo "Username Exists";
}else{
    $reg ="insert into userReg(username,password,sex) values ('$name','$pass','$sex')";
    mysqli_query($con,$reg);
    echo "registration successful";

    
}
