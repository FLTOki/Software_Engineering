<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM orders");
?>

<!DOCTYPE html>
<head>
    <title>View Orders</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<table class="table">
	<tr class="row">
    <td>Student ID</td>
	<td>Name</td>
    <td>Quantity</td>
	<td>Total Amount</td>
	
	<td>Action</td>

	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["ID"]; ?></td>
	<td><?php echo $row["Student_id"]; ?></td>
    <td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Quantity"]; ?></td>
	<td><?php echo $row["Total_Amt"]; ?></td>
	
	
	<td><a href="delete.php?ID=<?php echo $row["ID"]; ?>">Clear Order</a></td>
	<!--<td><a href="update.php?ID=<?php echo $row["ID"]; ?>">Update</a></td>-->
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>