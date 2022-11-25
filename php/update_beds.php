<?php
include "connecttodb.php";
if (isset($_POST['update_b'])) {
   $hoscode = $_POST["hosworksat"];
   $beds = $_POST["licensenum"];
   $query = "UPDATE hospital SET numofbed='{$beds}' WHERE hoscode='{$hoscode}';";
   $result = mysqli_query($connection, $query);
   if (!$result) {
      die("databases query failed.");
   } else {
      $message = "Updated number of beds successfully!";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }
}
?>