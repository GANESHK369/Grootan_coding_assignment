<?php
//import.php

if(isset($_POST["student_name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
 $student_name = $_POST["student_name"];
 $student_phone = $_POST["student_phone"];
 $student_password = $_POST["student_password"];
 for($count = 0; $count < count($student_name); $count++)
 {
  $query .= "
  INSERT INTO tbl_student(student_name, student_phone, student_password) 
  VALUES ('".$student_name[$count]."', '".$student_phone[$count]."', '".$student_password[$count]."');
  
  ";
 }
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>
