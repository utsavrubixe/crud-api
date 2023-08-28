    <?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $sql = "SELECT * FROM myguests";
    $result = $conn->query($sql);

    $items = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row; 
            	
        }
    }

    echo json_encode($items);
}
?>
