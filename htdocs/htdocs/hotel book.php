<?php

$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection failed");
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS hotel_db");

$conn = mysqli_connect("localhost", "root", "", "hotel_db");

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_no INT UNIQUE,
    room_type VARCHAR(50),
    floor INT,
    beds INT,
    price INT,
    status VARCHAR(30)
)");

if (isset($_POST["insert"])) {

    $room_no = $_POST["room_no"];
    $room_type = $_POST["room_type"];
    $floor = $_POST["floor"];
    $beds = $_POST["beds"];
    $price = $_POST["price"];
    $status = $_POST["status"];

    $sql = "INSERT INTO rooms
            (room_no, room_type, floor, beds, price, status)
            VALUES
            ($room_no, '$room_type', $floor, $beds, $price, '$status')";

    if (mysqli_query($conn, $sql)) {
        echo "Room added successfully";
    } else {
        echo "Room number already exists";
    }
}

if (isset($_POST["update"])) {

    $id = $_POST["id"];
    $status = $_POST["new_status"];

    $sql = "UPDATE rooms SET status='$status' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Room status updated successfully";
    } else {
        echo "Room not found";
    }
}

?>

<h3>Add Hotel Room</h3>

<form method="post">

Room Number:
<input type="number" name="room_no"><br><br>

Room Type:
<input type="text" name="room_type"><br><br>

Floor:
<input type="number" name="floor"><br><br>

Beds:
<input type="number" name="beds"><br><br>

Price:
<input type="number" name="price"><br><br>

Status:
<select name="status">
    <option>Available</option>
    <option>Occupied</option>
    <option>Maintenance</option>
</select>

<br><br>

<input type="submit" name="insert" value="Add Room">

</form>


<h3>Update Room Status</h3>

<form method="post">

Room ID:
<input type="number" name="id"><br><br>

New Status:
<select name="new_status">
    <option>Available</option>
    <option>Occupied</option>
    <option>Maintenance</option>
</select>

<br><br>

<input type="submit" name="update" value="Update">

</form>
```
