<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $first_name = $data["first_name"];
    $last_name= $data["last_name"];
    $email = $data["email"];
    $subject= $data["subject"]; 

    $sql ="INSERT INTO myguests (first_name, last_name, email, subject) VALUES ('$first_name', '$last_name', '$email', '$subject')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
