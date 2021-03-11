<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $area_code = $_POST['area_code'];
   $phone = $_POST['phone'];
   $course1 = $_POST['course1'];
   $course2 = $_POST['course2'];
   $course3 = $_POST['course3'];
   $gender = $_POST['gender'];

   //Database Connection
   $conn = new mysqli('localhost','root','','details');
   if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
   }else{
       $stmt = $conn->prepare("insert into customer(first_name, last_name, address, email, area_code, phone, course1, course2, course3,gender) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("ssssiissss",$first_name, $last_name, $address, $email, $area_code, $phone, $course1, $course2, $course3, $gender);
       $stmt->execute();
       echo "Details added Successfully ...";
       $stmt->close();
       $conn->close();
   }
?>

<a href="online_course_bootstrapCDN.html">
    <button>Online Course Page</button>
    </a>
     
</body>
</html>