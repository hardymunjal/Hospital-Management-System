<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Patients</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="patient.php"><img id="patient" src="images/patient.jpg" /></a>
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

                <br>
                <h1>PATIENTS INFO</h1>
                <div class="filter-div">
                        <form action="" method="POST">
                                <select name="doctor" id="doctor">
                                        <option value="">All Doctors</option>
                                        <?php
                                        # Select doctors which are treating atleast 1 patient
                                        $query = "SELECT DISTINCT(d.licensenum), d.firstname, d.lastname FROM doctor d inner join looksafter l ON d.licensenum=l.licensenum;";
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
                                <input type="submit" class="submit-form" value="Get Patients">
                </div>
                <br>
                <table id="table">
                        <tr>
                                <th>OHIP Number</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                        </tr>
                        <?php
                        include "./php/show_patients_.php";
                        ?>
                </table>
                <div class="footer">
                        <p> <b> &copy; All Rights Reserved by Group No. 105 </b></p>
                </div>
        </div>
        </form>


</body>

</html>