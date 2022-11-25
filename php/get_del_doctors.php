<?php

$query = "SELECT * FROM doctor;";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
    $doctor = $row;
    echo "<tr><td><input type='radio' name='radio_b' value=" . $row['licensenum'] . "></input></td>";
    echo "<td>" . $row["licensenum"] . "</td>";
    echo "<td>" . $row["firstname"] . "</td>";
    echo "<td>" . $row["lastname"] . "</td></tr>";
}

mysqli_free_result($result);
?>