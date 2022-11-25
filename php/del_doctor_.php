<?php
include "connecttodb.php";
if (isset($_POST['submit_b'])) {
   $radioVal = $_POST["radio_b"];
   $query = "DELETE FROM doctor WHERE licensenum='{$radioVal}';";
   $result = mysqli_query($connection, $query);
   if (!$result) {
      $message = "Cannot delete as Doctor treats Patient!";
      echo "<script type='text/javascript'>alert('$message');</script>";
   } else {
      $message = "Doctor deleted successfully!";
      echo "<script type='text/javascript'>alert('$message');</script>";
   }
}
?>