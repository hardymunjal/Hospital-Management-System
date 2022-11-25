<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctors</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/index.js"></script>
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="specialists.php"><img src="images/doctors.jpg" /></a>
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
                <h1>DOCTORS INFO </h1>
                <div class="filter-div">
                        <form action="" method="POST">
                                <select name="column" id="column">
                                        <option value="">Choose Column</option>
                                        <option value="lastname">Last Name</option>
                                        <option value="birthdate">Birth Date</option>
                                </select>
                                <select name="order" id="order">
                                        <option value="">Choose Order</option>
                                        <option value="asc">Ascending</option>
                                        <option value="desc">Descending</option>
                                </select>
                                <select name="speciality" id="speciality">
                                        <option value="">All Specialities</option>
                                        <?php
                                        include "./php/get_speciality.php";
                                        ?>
                                </select>
                                <input type="submit" class="submit-form" value="Submit">
                        </form>
                </div>
                <br>
                <table id="table">
                        <tr>
                                <th>License Number</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>License Date</th>
                                <th>Birth Date</th>
                                <th>Works at Hospital</th>
                                <th>Speciality</th>
                        </tr>
                        <?php
                        include "./php/get_doctors.php";
                        ?>
                </table>


                <div class="footer">
                        <p> <b> &copy; All Rights Reserved by Group No. 105 </b></p>
                </div>


        </div>


</body>

</html>