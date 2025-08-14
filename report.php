<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking Report</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Booking Summary</h2>
  <table border="1">
    <tr>
      <th>Name</th>
      <th>Train No</th>
      <th>Source</th>
      <th>Destination</th>
      <th>Seats</th>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT * FROM Booking");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>
              <td>{$row['Name']}</td>
              <td>{$row['TrainNo']}</td>
              <td>{$row['Source']}</td>
              <td>{$row['Destination']}</td>
              <td>{$row['Seats']}</td>
            </tr>";
    }
    ?>
  </table>
</body>
</html>