<?php
include 'connecttodb.php';

if (isset($_POST["column"])) {

    $hos_name = $_POST["column"];

    $query_doc = "SELECT d.firstname, d.lastname FROM hospital h INNER JOIN doctor d ON h.hoscode=d.hosworksat WHERE h.hoscode='{$hos_name}';";

    $result_doc = mysqli_query($connection, $query_doc);
    if (!$result_doc) {
        die("databases query failed.");
    }
    while ($row_1 = mysqli_fetch_assoc($result_doc)) {
        $doc_fname = $row_1["firstname"];
        $doc_lname = $row_1["lastname"];
        echo "<tr><td>" . $doc_fname . " " . $doc_lname . "</td></tr>";
    }
    mysqli_free_result($result_doc);
}
?>