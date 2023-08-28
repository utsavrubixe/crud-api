<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] === "PUT") {
    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data["id"];
    $first_name = $data["first_name"];
    $last_name= $data["last_name"];
    $email = $data["email"];
    $subject= $data["subject"];

    $sql = "UPDATE myguests SET first_name='$first_name', last_name='$last_name', email='$email', subject='$subject' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
