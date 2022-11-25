<?php
$column = $_POST["column"];
$order = $_POST["order"];
$speciality = $_POST["speciality"];

$query = "SELECT * FROM doctor;";
if ($column != "") {
    $query = "SELECT * FROM doctor ORDER BY {$column};";
}
if ($order != "" and $column != "") {
    $query = "SELECT * FROM doctor ORDER BY {$column} {$order};";
    if ($speciality != "") {
        $query = "SELECT * FROM doctor WHERE speciality='{$speciality}' ORDER BY {$column} {$order};";
    }
} else if ($speciality != "" and ($column == "")) {
    $query = "SELECT * FROM doctor WHERE speciality='{$speciality}';";
}

$result = mysqli_query($connection, $query);

if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
    $doctor = $row;
    echo "<tr><td>" . $row["licensenum"] . "</td>";
    echo "<td>" . $row["firstname"] . "</td>";
    echo "<td>" . $row["lastname"] . "</td>";
    echo "<td>" . $row["licensedate"] . "</td>";
    echo "<td>" . $row["birthdate"] . "</td>";
    echo "<td>" . $row["hosworksat"] . "</td>";
    echo "<td>" . $row["speciality"] . "</td></tr>";
}
mysqli_free_result($result);
?>