<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Trains</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Available Trains</h2>
  <table border="1">
    <tr>
      <th>Train No</th>
      <th>Name</th>
      <th>Source</th>
      <th>Destination</th>
      <th>Seats</th>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM Train");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['TrainNo']}</td>
              <td>{$row['Name']}</td>
              <td>{$row['Source']}</td>
              <td>{$row['Destination']}</td>
              <td>{$row['SeatsAvailable']}</td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>