<?php
include "connecttodb.php";
# Select the doctors which are not head doctors and do not treat patients
$query = "SELECT d.licensenum, d.firstname, d.lastname FROM doctor d inner join hospital h ON d.hosworksat=h.hoscode left join looksafter l ON d.licensenum=l.licensenum WHERE d.licensenum!=h.headdoc AND l.ohipnum IS NULL;";

$result = mysqli_query($connection, $query);

if (!$result) {
    echo mysqli_error($connection);
}

while ($row = mysqli_fetch_assoc($result)) {
    $doctor = $row;
    echo "<tr><td><input type='radio' name='radio_b' value=" . $row['licensenum'] . "></input></td>";
    echo "<td>" . $row["licensenum"] . "</td>";
    echo "<td>" . $row["firstname"] . "</td>";
    echo "<td>" . $row["lastname"] . "</td></tr>";
}

mysqli_free_result($result);
mysqli_close($connection);
?>