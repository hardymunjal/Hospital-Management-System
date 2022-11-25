<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hospitals</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<?php
include "./php/connecttodb.php";
?>

<body class="a">
        <div class="main">
                <div class="header">
                        <a href="hospitals.php"><img id="hospital" src="images/hospital.jpg" /></a>
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
                <h1>HOSPITAL INFO</h1>
                <div class="filter-div">
                        <form action="" method="post">
                                <select name="column" id="column">
                                        <option value="">Choose Hospital</option>
                                        <?php
                        $query = "SELECT * FROM hospital;";
                        $result = mysqli_query($connection, $query);
                        if (!$result) {
                                echo mysqli_error($connection);
                        } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                        $hos_code = $row["hoscode"];
                                        $hos_name = $row["hosname"];
                                        echo "<option value=" . $hos_code . ">" . $hos_code . ":->" . $hos_name . "</option>";
                                }
                        }
                        ?>
                                </select>
                                <input type="submit" class="submit-form" value="Get Data">
                        </form>
                </div>
                <br>
                <table id="table">
                        <tr>
                                <th>Hospital Name</th>
                                <th>City</th>
                                <th>Province</th>
                                <th>Number of Beds</th>
                                <th>Head Doctor - First Name</th>
                                <th>Head Doctor - Last Name</th>
                        </tr>
                        <?php
                include "./php/show_hos.php";
                ?>
                </table>
                <br><br>
                <h1>DOCTORS INFO</h1>

                <table id="table">
                        <tr>
                                <th>Doctors</th>
                        </tr>
                        <?php
                include "./php/show_hos_doc.php";
                ?>
                </table>



                <div class="footer">
                        <p> <b> &copy; All Rights Reserved by Group No. 105 </b></p>
                </div>


        </div>


</body>

</html>