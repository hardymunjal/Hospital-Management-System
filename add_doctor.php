<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Doctor Information</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="add_doctor.php"><img src="images/doctors.jpg" /></a>
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
                        <h2><br />Add Doctor Information</h2>
                        <div class="myForm">
                                <form action="./php/add_doctor_.php" method="post">
                                        <label>License Number:
                                                <input type="text" name="licensenum" placeholder="Enter License Number"
                                                        required>
                                        </label>

                                        <label>First Name:
                                                <input type="text" name="firstname" placeholder="Enter First Name">
                                        </label>

                                        <label>Last Name:
                                                <input type="text" name="lastname" placeholder="Enter last name">
                                        </label>

                                        <label>License Date:
                                                <input type="date" name="licensedate">
                                        </label>
                                        <label>Birth Date:
                                                <input type="date" name="birthdate">
                                        </label>

                                        <label>Hospital Code:
                                                <select name="hosworksat" id="worksat">
                                                        <option value="">Choose Hospital</option>
                                                        <?php
                                                        include "./php/get_hospitals.php";
                                                        ?>
                                                </select>
                                        </label>

                                        <label>Speciality
                                                <input type="text" name="speciality" placeholder="Enter Speciality">
                                        </label>

                                        <input type="submit" id="addDoctorForm" class="submit-form" value="Submit">
                                </form>
                        </div>
                        <div class="footer">
                                <p> <b> &copy; All Rights Reserved by Group No. 105 </b></p>
                        </div>
</body>

</html>