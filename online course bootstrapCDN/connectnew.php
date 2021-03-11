<?php
   $emailid = $_POST['email_id'];
   $fullname = $_POST['fullname'];
   $message = $_POST['message']; 

   $conn = new mysqli('localhost','root','','contactus');
   if($conn->connect_error){
       die('connection Failed :'.$conn->connect_error);
   }
   else{
       $stmt = $conn->prepare("insert into contactdetails(email_id,  fullname, message) values(?,?,?)");
       $stmt->bind_param("sss",$email_id, $fullname, $message);
       $stmt->execute();
       echo "contact detals added.....";
       $stmt->close();
       $conn->close();
   }
   
?>