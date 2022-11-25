<?php
include 'connecttodb.php';
$doc_pat_list = array();
$query = "SELECT * FROM looksafter;";
$result = mysqli_query($connection, $query);
if (!$result) {
    echo mysqli_error($connection);
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
    echo "<script>document.location = 'http://cs3319.gaul.csd.uwo.ca/vm196/a3group105/rel_patient.php'</script>";
} else {
    $query = "INSERT INTO looksafter VALUES ('{$licnum}','{$ohipnum}');";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        echo mysqli_error($connection);
    } else {
        $message = "Relationship added successfully!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>document.location = 'http://cs3319.gaul.csd.uwo.ca/vm196/a3group105/rel_patient.php'</script>";
    }
}
mysqli_close($connection);
?>