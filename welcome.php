<?php
session_start();

?>

<html>
<head>
  <title>Welcome to the login form </title>
  <style>

  </style>
  <script language="JavaScript">
    function jfn() {
      window.open('signin.php');
    }
  </script>
    <script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
                $("input").focus(function(){
                    $(this).css("background-color", "#cccccc");
                });
                $("input").blur(function(){
                    $(this).css("background-color", "#ffffff");
                });

        });


        </script>
</head>
<body>
<h1 style="background-color: #5bc0de" align="center">Welcome to the login page</h1>
<div align="center" style="background-color: #5bc0de">
  <pre>
<form method="post" action="login.php">
          Name     <input name="name" id="name" type="text" required placeholder="Your Name">
          Password <input name="pass" id="pass" type="password" required placeholder="Enter Password"><br>
  <input type="submit" value="Login">
                                        <input type="button" value="Signup" onclick="jfn()"><span>click this to redirect to signup page</span>
</form>
    </pre>
  </div>
</body>
</html>
<?php ?>
