<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
   $user_name = $_POST['user_name'];
   $password = $_POST['password'];
   $name = $_POST['name'];
   
   //Database Connection
   $conn = new mysqli('localhost','root','','login_page');
   if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
   }else{
       $stmt = $conn->prepare("insert into users(user_name, password, name ) values(?, ?, ?)");
       $stmt->bind_param("sss",$user_name, $password, $name);
       $stmt->execute();
       echo "Details added Successfully ...";
       $stmt->close();
       $conn->close();
   }
?>
    <a href="loginpage.php">
    <button>Login Page</button>
    </a>
     
</body>
</html>