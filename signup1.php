<?php
session_start();
$name=$_GET['username'];
$_SESSION['username']=$name;
$pass=$_GET['password'];
$servername = "localhost";
$username = "akshay";
$password = "abcd";
$dbname="form";
$conn = new mysqli($servername, $username, $password,$dbname) or die("cannot connect");
$sql="INSERT INTO student (username,password)VALUES ('$name','$pass')";
//$sql="select * from student where username='$name' AND password='$pass' ";
//$result=$conn->query($sql);
if($conn->query($sql)===TRUE)
{
    echo "true";
}
else
{
    echo "false";
}

/*$row= mysqli_num_rows($result);
echo $row;
if($row!=0)
{
    //echo "hi";
	//alert("wrong credentials");
    header("location: logout.php");

}
else
{
   header("location: welcome.php");
    echo "no";

}

mysql_close($conn);

?>
