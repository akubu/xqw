<?php

    if (($_GET['buttons']) == "login") {
    $a=1;

        session_start();

        $servername = "localhost";
        $username = "akshay";
        $password = "abcd";
        $dbname = "form";
        $name = $_GET['username'];
        $_SESSION['username'] = $name;
        $pass = ($_GET['password']);
//var_dump($pass);
        $conn = new mysqli($servername, $username, $password, $dbname) or die("cannot connect");
//$sql="INSERT INTO student (username,password)VALUES ('$name','$pass')";


        $sql = "select * from student where username='$name' AND password='$pass' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            //echo "true";

            echo "true";
            //header("location: logout.php");
//echo "done" ;
        } else {
            echo "false";
        }

//echo "hello";
        mysql_close($conn);
    }

if($a!=1)
{
?>




    <html>
    <head>
        <title>Welcome to the login/signup form </title>
        <style>

        </style>

        <script language="JavaScript">
            function jfn() {
                window.open('signin.php');
            }
        </script>
        <script src="jquery-3.0.0.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="
                crossorigin="anonymous"></script>


        <!--LOGIN-->


        <script>

            function logins() {

                var ajaxRequest;
                try {

                    // Opera 8.0+, Firefox, Safari
                    ajaxRequest = new XMLHttpRequest();
                } catch (e) {

                    // Internet Explorer Browsers
                    try {
                        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {

                        try {
                            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {


                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }


                ajaxRequest.onreadystatechange = function () {

                    if (ajaxRequest.readyState == 4) {
                        var ajaxDisplay = document.getElementById('add_err');
                        //window.open("logout.php");
                         //ajaxDisplay.innerHTML = ajaxRequest.responseText;
                        if (ajaxRequest.responseText == String("true")) {
                            window.open("logout.php");
                        }
                        else {
                            window.alert(ajaxRequest.responseText);
                            //ajaxDisplay.innerHTML = "incorrect username and password";
                        }
                    }
                }

                var buttons = document.getElementById('login').value;
                var username = document.getElementById('name').value;
                var password = document.getElementById('pass').value;

                var queryString = "?buttons=" + buttons + "&username=" + username;

                queryString += "&password=" + password ;
                ajaxRequest.open("GET", "welcome1.php" + queryString, true);
                ajaxRequest.send(null);
            }

        </script>


        <!--signup-->


        <script>
            function signup() {

                var ajaxRequest;
                try {

                    // Opera 8.0+, Firefox, Safari
                    ajaxRequest = new XMLHttpRequest();
                } catch (e) {

                    // Internet Explorer Browsers
                    try {
                        ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                    } catch (e) {

                        try {
                            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                        } catch (e) {


                            alert("Your browser broke!");
                            return false;
                        }
                    }
                }

                ajaxRequest.onreadystatechange = function () {

                    if (ajaxRequest.readyState == 4) {
                        var ajaxDisplay = document.getElementById('add_err');
                        ajaxDisplay.innerHTML = ajaxRequest.responseText;
                        if (ajaxRequest.responseText == "true") {
                            window.open("logout.php");
                        }
                        else {
                            ajaxDisplay.innerHTML = ajaxRequest.responseText;
                        }
                    }
                }


                var username = document.getElementById('name').value;
                var password = document.getElementById('pass').value;

                var queryString = "?username=" + username;

                queryString += "&password=" + password;
                ajaxRequest.open("GET", "signup1.php" + queryString, true);
                ajaxRequest.send(null);
            }


            /*$(document).ready(function(){

             $("#login").click(function(){
             name=$("#name").val();
             pass=$("#pass").val();
             var data = { 'username': name , 'password': pass};
             $.ajax({
             type: "POST",
             url: "login1.php",
             data: data ,


             success: function(html){

             if(html=='true')
             {
             window.open("logout.php");

             }
             else if(html=='false')
             {
             //alert(data.username);
             $("#add_err").html("Wrong username or password");
             }
             },
             beforeSend:function()
             {
             // alert(data);
             $("#add_err").html("Loading... " );
             }
             });
             return false;
             });
             });*/


        </script>
    </head>
    <body>
    <h1 style="background-color: #5bc0de" align="center">Welcome to the login/signup page</h1>
    <div align="center" style="background-color: #5bc0de">
  <pre>
<form>
          Name     <input name="name" id="name" type="text" required placeholder="Your Name">
          Password <input name="pass" id="pass" type="password" required placeholder="Enter Password"><br>
  <input type="button" name="login" value="login" id="login" onclick="logins()">
    <input type="button" value="signup" onclick="signup()"><span style="color: red" id="add_err"> </span>
</form>
    </pre>
    </div>
    </body>
    </html>
<?php } ?>


