<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Doctor</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="del_doctor.php"><img src="images/doctors.jpg" /></a>
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
                <h1>REMOVE DOCTORS</h1>
                <div class="filter-div-del">
                        <form action="./php/del_doctor_.php" method="post">
                                <input type="submit" class="submit-form" name="submit_b" value="Delete"
                                        onclick="return confirm('Are you sure you want to delete this doctor?')">

                                <br>
                                <table id="table">
                                        <tr>
                                                <th>Select</th>
                                                <th>License Number</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                        </tr>
                                        <?php
                        include "./php/get_del_doctors.php";
                        ?>
                                </table>
                        </form>
                </div>

                <div class="footer">
                        <p> <b> &copy; All Rights Reserved by Group No. 105 </b></p>
                </div>
        </div>


</body>

</html>