<?php
include('session.php');
?>
<html">

<head>
   <title>Welcome </title>
</head>

<body>
   <h1>Welcome</h1> 
   <h2><a href = "logout.php">Logout</a></h2>
   <?php
   echo $row['username'];
?>
</body>
</html>