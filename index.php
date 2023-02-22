<?php 
$servername="localhost";
$username="root";
$password="";
$database="stud";
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
    echo "sucessfully connected";
}
else
{
    die("Not connected");
}
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$sql="INSERT INTO student_details(name,address,email,phonenumber) VALUES('$name','$address','$email','$phonenumber')";
mysqli_query($connection,$sql);
mysqli_close($connection); 