<?php
include 'connecttodb.php';
$lic_list = array();
$query = "SELECT licensenum FROM doctor;";
$result = mysqli_query($connection,$query);
if (!$result) {
    echo mysqli_error($connection);    
    }else{
        while ($row = mysqli_fetch_assoc($result)) {
	        $lic_num = $row["licensenum"];
            array_push($lic_list, $lic_num);
    }
}

$licnum = $_POST["licensenum"];
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$ldate = $_POST["licensedate"];
$bdate = $_POST["birthdate"];
$hosworksat = $_POST["hosworksat"];
$speciality = $_POST["speciality"];

if (in_array($licnum, $lic_list)){
    $message = "License Number already exists!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}else{
    $query = "INSERT INTO doctor VALUES ('{$licnum}','{$fname}', '{$lname}','{$ldate}', '{$bdate}','{$hosworksat}','{$speciality}');";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        echo mysqli_error($connection);
    }else{
        $message = "Doctor added successfully!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>document.location = 'http://cs3319.gaul.csd.uwo.ca/vm196/a3group105/add_doctor.php'</script>";
    }
}
mysqli_close($connection);
?>