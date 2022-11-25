<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Assign Doctor-Patient</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="rel_patient.php"><img src="images/doctors.jpg" /></a>
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
                        <h2><br />Assign Patient to Doctor</h2>
                        <div id="add_relation" class="filter-div">
                                <form action="./php/rel_patient_.php" method="post">
                                        <select name="licensenum" id="doctor">
                                                <option value="">Choose Doctor</option>
                                                <?php
                            $query = "SELECT * FROM doctor;";
                            $result = mysqli_query($connection, $query);
                            if (!$result) {
                                    echo mysqli_error($connection);
                            } else {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                            $lic_num = $row["licensenum"];
                                            $doc_fname = $row["firstname"];
                                            $doc_lname = $row["lastname"];
                                            echo "<option value=" . $lic_num . ">" . $lic_num . ":->" . $doc_fname . " " . $doc_lname . "</option>";
                                    }
                            }
                            ?>
                                        </select>
                                        <select name="ohipnum" id="patient">
                                                <option value="">Choose Patient</option>
                                                <?php
                            $query = "SELECT * FROM patient;";
                            $result = mysqli_query($connection, $query);
                            if (!$result) {
                                    echo mysqli_error($connection);
                            } else {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                            $p_num = $row["ohipnum"];
                                            $p_fname = $row["firstname"];
                                            $p_lname = $row["lastname"];
                                            echo "<option value=" . $p_num . ">" . $p_num . ":->" . $p_fname . " " . $p_lname . "</option>";
                                    }
                            }
                            ?>

                                        </select>

                                        <input type="submit" class="submit-form" value="Assign">
                                </form>
                        </div>
                </div>
</body>

</html>