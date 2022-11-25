<?php
include 'connecttodb.php';
$doc_pat_list = array();
$query = "SELECT * FROM looksafter;";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("databases query failed.");
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $lic_num = $row["licensenum"];
        $ohip_num = $row["ohipnum"];
        array_push($doc_pat_list, $lic_num . ":" . $ohip_num);
    }
}

$licnum = $_POST["licensenum"];
$ohipnum = $_POST["ohipnum"];

if (in_array($licnum . ":" . $ohipnum, $doc_pat_list)) {
    $message = "Relationship already exists!";
    echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    $query = "INSERT INTO looksafter VALUES ('{$licnum}','{$ohipnum}');";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("databases query failed.");
    } else {
        $message = "Relationship added successfully!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>