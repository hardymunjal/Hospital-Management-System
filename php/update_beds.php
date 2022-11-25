<?php
include "connecttodb.php";
if (isset($_POST['update_b'])) {
   $hoscode = $_POST["hosworksat"];
   $beds = $_POST["licensenum"];
   $query = "UPDATE hospital SET numofbed='{$beds}' WHERE hoscode='{$hoscode}';";
   $result = mysqli_query($connection, $query);
   if (!$result) {
      echo mysqli_error($connection);
   } else {
      $message = "Updated number of beds successfully!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      echo "<script>document.location = 'http://cs3319.gaul.csd.uwo.ca/vm196/a3group105/update_hospital.php'</script>";
   }
   mysqli_close($connection);
}
?>