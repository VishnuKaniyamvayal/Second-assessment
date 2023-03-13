<?php include 'submit.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All details</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
</head>
<body>

<!-- table for storing data -->


<table class="table" >
  <thead>
    <tr>
      <th scope="col">S.no</th>      
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Pass_Number(Unique)</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of birth</th>
      <th scope="col">Location Visited</th>
      <th scope="col">Date Of Visit</th>
      <th scope="col">Amount of Purchase</th>
      <th scope="col">No of Items</th>
      <th scope="col">Net amount</th>
    </tr>
  </thead>
  <tbody>
    <?php include "get_details.php" ?>
  </tbody>
</table>
</body>
</html>
