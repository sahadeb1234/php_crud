<?php
$stu_id = $_GET['id'];
 // connect databases

 $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");

 //join tables student or studentclass

 $sql = "DELETE FROM student WHERE sid ={$stu_id}";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
 
 header("Location: http://localhost/crud_html/index.php");

 mysqli_close($conn)


?>