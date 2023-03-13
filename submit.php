<?php

//CONSTANTS
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_form";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$pass_number = $_POST['pass_number'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['date_of_birth'];
$location_visited = $_POST['location_visited'];
$date_of_visit = $_POST['date_of_visit'];
$amount_of_purchase = $_POST['amount_of_purchase'];
$no_of_items = $_POST['no_of_items'];
$net_amount = $_POST["net_amount"];
$values = "'$first_name', '$last_name', '$pass_number','$email','$phone','$gender','$dob','$location_visited','$date_of_visit','$amount_of_purchase','$no_of_items','$net_amount'";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die();
  echo "Connection failed: " . $conn->connect_error;
}

   

$sql = "INSERT INTO details( first_name, last_name, pass_number, email, phone, gender, dob , location_visited , date_of_visit , amount_of_purchase , no_of_items , net_amount) VALUES ($values)";

 if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }




    
    




?>

















