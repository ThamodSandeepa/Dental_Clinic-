<?php
include "config.php";
if (isset($_POST['update'])) {
$name = $_POST['name'];
$user_id = $_POST['user_id'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$date = $_POST['date'];

$sql = "UPDATE `appointment` SET `full name`='$name',`email`='$email',`telephone`='$telephone',`appointment date`='$date' WHERE `id`='$user_id'";

$result = $conn->query($sql);
if ($result == TRUE) {
echo "Record updated successfully.";
}else{
echo "Error:" . $sql . "<br>" . $conn->error;
}
}

if (isset($_GET['id'])) {

$user_id = $_GET['id'];
$sql = "SELECT * FROM `appointment` WHERE `id`='$user_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {

$name = $row['full name'];
$email = $row['email'];
$telephone = $row['telephone'];
$date = $row['appointment date'];
$id = $row['id'];
}

?>

<h2>Update Form</h2>

<form action="" method="POST">
<fieldset>
<legend>Appointment details:</legend>

Full name:<br>
<input type="text" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="user_id" value="<?php echo $id; ?>">
<br>

Email:<br>
<input type="email" name="email" value="<?php echo $email; ?>">
<br>

Telephone:<br>
<input type="text" name="telephone" value="<?php echo $telephone; ?>">
<br>

Date:<br>
<input type="datetime-local" name="date" value="<?php echo $date; ?>">

<input type="submit" value="Update" name="update">

</fieldset>
</form>
</body>
</html>

<?php
} else{
header('Location: view.php');
}
}
?> 

