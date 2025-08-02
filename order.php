<?php
include('./includes/common.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="website icon" type="png" href="images/logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    
    <style>
table {
      margin: auto; 
      border: 1px solid black; 
      border-collapse: collapse;
      border-collapse: collapse;
      width: 70%;
    }
th {
  text-align: left;
  background-color: #c38636;
  padding: 15px;

}
tr:nth-child(even) {
      background-color: #f9f9f9; /* Light grayish row */
    }
td {
        padding: 10px;
      border: 1px solid #ddd; 
    }
    .status-confirmed {
      color: blue; /* Blue color for Confirmed status */
      font-weight: bold; /* Bold text */
    }
table, td, th {  
  border: 1px solid #ddd;
  text-align: center;
}

    .confirmed-status {
    background-color: #28a745;
    color: white;
    font-weight: bold;
    padding: 5px;
    border-radius: 5px;
}

</style>
</head>
<body>
<?php

$query = " SELECT users.*, products.*, users_products.*
  FROM users
  JOIN users_products ON users.id = users_products.user_id
  JOIN products ON users_products.item_id = products.id
";

$result=mysqli_query($con, $query ) ;

if ($result && mysqli_num_rows($result) > 0) { // Check if there are any rows
  ?>
    <table   >
    <tr>
     <th>User Id</th>
     <th>Email</th>
     <th>Full Name</th>
     <th>Phone Number</th>
     <th>Item Name</th>
     <th>Item Id</th>
     <th>Price</th>
     <th>Status</th>
     </tr>
     
     <?php


  while ($row = mysqli_fetch_assoc($result)) {
    $statusClass = ($row['status'] == "Confirmed") ? "confirmed-status" : "";

?>
      <tr>
          <td><?php echo $row['user_id']; ?></td>
          <td><?php echo $row['email_id']; ?></td>
          <td><?php echo $row['full_name']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['item_id']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td class="<?php echo $statusClass; ?>"><?php echo $row['status']; ?></td>
          </tr>
<?php
  }
} else {
  echo "<p style='text-align:center;   padding: 15px; margin: 50px 400px 50px 400px;
 font-size:1.2em; background-color:#c38636; color:rgb(255, 255, 255);'><b>No Orders Found </b></p>";
}
    ?>
    <?php
     
    $status = "Confirmed"; 

    $statusClass = ($status == "Confirmed") ? "confirmed-status" : "";
?>

   </table>
</body>
</html>