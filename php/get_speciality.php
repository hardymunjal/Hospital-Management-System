<?php
include 'connecttodb.php';
$query = "SELECT DISTINCT(speciality) FROM doctor;";
$result = mysqli_query($connection, $query);
if (!$result) {
	die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
	$spec_ = $row["speciality"];
	echo "<option value=" . $spec_ . ">" . $row["speciality"] . "</option>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>