<?php
include_once 'lib/connection.php';
$sql = "DELETE FROM users WHERE $row["id"];
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>