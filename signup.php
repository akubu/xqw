<?php
session_start();
$name=$_POST['name'];
$_SESSION['username']=$name;
$pass=$_POST['pass'];
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
header("location: logout.php");
}
else
{
    header("location: welcome.php");
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

}*/
echo "hello";
mysql_close($conn);

?>
