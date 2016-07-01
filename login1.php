<?php
session_start();
$servername = "localhost";
$username = "akshay";
$password = "abcd";
$dbname="form";
$name=$_GET['username'];
$pass=($_GET['password']);
//var_dump($pass);
$conn = new mysqli($servername, $username, $password,$dbname) or die("cannot connect");
//$sql="INSERT INTO student (username,password)VALUES ('$name','$pass')";


    $sql = "select * from student where username='$name' AND password='$pass' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        $_SESSION['username']=$name;
        echo 'true';


//echo "done" ;
    }
    else {
        echo 'false';
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

//echo "hello";
mysql_close($conn);

?>
