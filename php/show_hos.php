<?php
include 'connecttodb.php';

if (isset($_POST["column"])) {
    $hos_name = $_POST["column"];

    $query_hos = "SELECT h.hosname, h.city, h.prov, h.numofbed, d.firstname, d.lastname FROM hospital h INNER JOIN doctor d ON h.headdoc=d.licensenum WHERE h.hoscode='{$hos_name}';";

    $result_hos = mysqli_query($connection, $query_hos);

    if (!$result_hos) {
        die("databases query failed.");
    }
    while ($row = mysqli_fetch_assoc($result_hos)) {
        echo "<tr><td>" . $row["hosname"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["prov"] . "</td>";
        echo "<td>" . $row["numofbed"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td></tr>";
    }

    mysqli_free_result($result_hos);
}
?>