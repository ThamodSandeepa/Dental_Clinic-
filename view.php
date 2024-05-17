
<?php
include "config.php";
$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html>
<head>

<title>Admin View </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>


<body>
<div class="container">
<h2>Patients' Details</h2>
<table class="table">
<thead>

<tr>
<th>ID</th>
<th>Full Name</th>
<th>Email</th>
<th>Telephone</th>
<th>Appointment Date</th>
<th>Action</th>
</tr>

</thead>

<tbody>
<?php
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['full name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['telephone']; ?></td>
<td><?php echo $row['appointment date']; ?></td>
<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php
}

}
?>

</tbody>
</table>
</div>
</body>
</html>