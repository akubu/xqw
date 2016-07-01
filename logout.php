<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location: welcome1.php");
}

echo "Welcome ". $_SESSION['username'];

?>
<html>
<script language="JavaScript">
    function fn() {

        window.open('welcome1.php');
        <?php
       // session_destroy();
        ?>

    }
    </script>
<script src="bootstrap.css" rel="stylesheet"></script>
<input align="center" style="background-color: #31b0d5" type="button" value="Logout" onclick="fn()">
</html>

<?php


?>
