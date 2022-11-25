<?php
include 'connecttodb.php';

$doc_name = $_POST["doctor"];

$query = "SELECT p.firstname, p.lastname, p.ohipnum FROM doctor d INNER JOIN looksafter l ON d.licensenum=l.licensenum INNER JOIN patient p ON l.ohipnum=p.ohipnum;";
if ($doc_name != "") {
    $query = "SELECT p.firstname, p.lastname, p.ohipnum FROM doctor d INNER JOIN looksafter l ON d.licensenum=l.licensenum INNER JOIN patient p ON l.ohipnum=p.ohipnum WHERE d.licensenum='{$doc_name}';";
}

$result = mysqli_query($connection, $query);

if (!$result) {
    echo mysqli_error($connection);
}
while ($row = mysqli_fetch_assoc($result)) {
    $doctor = $row;
    echo "<tr><td>" . $row["ohipnum"] . "</td>";
    echo "<td>" . $row["firstname"] . "</td>";
    echo "<td>" . $row["lastname"] . "</td></tr>";
}
mysqli_free_result($result);
mysqli_close($connection)
?>