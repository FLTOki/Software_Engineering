<?php
include_once 'database.php';
$sql = "DELETE FROM orders WHERE ID='" . $_GET["ID"] . "'";
if (mysqli_query($conn, $sql)) {
	header("location: viewOrder.php");
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>