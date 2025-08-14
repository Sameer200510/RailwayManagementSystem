<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Tickets</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Ticket Booking</h2>
  <form method="post">
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Train No:</label><br>
    <input type="text" name="train"><br><br>

    <label>Source:</label><br>
    <input type="text" name="source"><br><br>

    <label>Destination:</label><br>
    <input type="text" name="destination"><br><br>

    <label>Seats:</label><br>
    <input type="number" name="seats"><br><br>

    <input type="submit" value="Book Now">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $train = $_POST['train'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $seats = $_POST['seats'];

    $sql = "INSERT INTO Booking (Name, TrainNo, Source, Destination, Seats)
            VALUES ('$name', '$train', '$source', '$destination', '$seats')";

    if (mysqli_query($conn, $sql)) {
      echo "<p>Booking successful!</p>";
    } else {
      echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
  }
  ?>
</body>
</html>