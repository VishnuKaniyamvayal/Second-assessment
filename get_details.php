<?php
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die();
  echo "Connection failed: " . $conn->connect_error;
}


//getting data using select query
$sql = "SELECT * FROM details";

//execute query
$records = mysqli_query($conn,$sql);

$i = 0;

while($row = mysqli_fetch_array($records))
{   $i = $i+1;  
    echo "<tr>";
    echo "<td>".$row['sno']."</td>";
    echo "<td>".$row['first_name']."</td>";
    echo "<td>".$row['last_name']."</td>";
    echo "<td>".$row['pass_number']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['dob']."</td>";
    echo "<td>".$row['location_visited']."</td>";
    echo "<td>".$row['date_of_visit']."</td>";
    echo "<td>".$row['amount_of_purchase']."</td>";
    echo "<td>".$row['no_of_items']."</td>";
    echo "<td>".$row['net_amount']."</td>";
    echo "</tr>";
}

?>