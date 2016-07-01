<?php
session_start();


?>
<html>
<head>
    <title>Welcome to the login form </title>
    <script src="bootstrap.css" rel="stylesheet"></script>

</head>
<body>
<h1 style="background-color: #5bc0de" align="center">Please enter your details</h1>
<div align="center" style="background-color: #5bc0de">
  <pre>
<form method="post" action="signup.php">
          Name     <input name="name" type="text" required placeholder="Your Name">
          Password <input name="pass" type="password" required placeholder="Enter Password"><br>
  <input type="submit" value="signup">
</form>
    </pre>
</div>
</body>
</html>
<?php ?>