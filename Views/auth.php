<?php include("../../config.php");
session_start();
$username = $_POST['user'];  
$password = $_POST['pass']; 
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($db,$username);
    $password = mysqli_real_escape_string($db,$password);
    $sql ="SELECT * FROM login WHERE USERNAME='$username' and PASSWORD='$password'";
    $result= mysqli_query($db,$sql);
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
 //   $active=$row['active'];
    $count=mysqli_num_rows($result);
    if($count==1){
        // session_register("username");
        // $_SESSION['login_user']=$username;
        echo "<h1><center> Login successful </center></h1>";  
        header("location: welcome.php");
        die();
    }
     else{
         echo"Your Login Name or Password is invalid";
     }

?>