<?php
include 'connecttodb.php';
$query = "SELECT DISTINCT(hoscode) FROM hospital;";
$result = mysqli_query($connection, $query);
if (!$result) {
	die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
	$hosc = $row["hoscode"];
	echo "<option value=" . $hosc . ">" . $hosc . "</option>";
}
mysqli_free_result($result);
mysqli_close($connection);
?>