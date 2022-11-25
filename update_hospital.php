<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Hospital Data</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="update_hospital.php"><img id="hospital" src="images/hospital.jpg" /></a>
                </div>

                <div class="mainmenu">
                        <ul>
                                <li><a href="home.php">Home </a></li>
                                <li><a href="hospitals.php">View Hospitals</a></li>
                                <li><a href="update_hospital.php">Update Hospital</a></li>
                                <li><a href="specialists.php">View Doctors</a></li>
                                <li><a href="add_doctor.php">Add Doctors</a></li>
                                <li><a href="del_doctor.php">Delete Doctors</a></li>
                                <li><a href="rel_patient.php">Assign Doctor</a></li>
                                <li><a href="patient.php">View Patient</a></li>
                        </ul>
                </div>

                <div class="a">
                        <h2><br />Update Hopsital Information</h2>
                        <div class="myForm">
                                <form action="./php/update_beds.php" method="post">
                                        <label>Hospital Code:
                                                <select name="hosworksat" id="worksat">
                                                        <option value="">Choose Hospital</option>
                                                        <?php
                                        $query = "SELECT * FROM hospital;";
                                        $result = mysqli_query($connection, $query);
                                        if (!$result) {
                                                die("databases query failed.");
                                        } else {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                        $hos_code = $row["hoscode"];
                                                        $hos_name = $row["hosname"];
                                                        echo "<option value=" . $hos_code . ">" . $hos_code . ":->" . $hos_name . "</option>";
                                                }
                                        }
                                        ?>
                                                </select>
                                        </label>

                                        <label>Beds:
                                                <input type="text" name="licensenum" placeholder="Enter no. of beds"
                                                        required>
                                        </label>

                                        <input type="submit" id="updateHospital" name="update_b" class="submit-form"
                                                value="Update">
                                </form>
                        </div>
</body>

</html>