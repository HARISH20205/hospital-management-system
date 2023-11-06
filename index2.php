<?php
    require_once('database.php');
    $query = "SELECT * FROM patients";
    $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Data</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    
    <table>
        <tr>
            <th>Patient Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Doctor Appointed</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
        </tr>
        <?php
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
                <td><?php echo $row['patient_id'];?></td>
                <td><?php echo $row['first_name'];?></td>
                <td><?php echo $row['last_name'];?></td>
                <td><?php echo $row['age'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['contact_number'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['doctor_appointed'];?></td>
                <td><?php echo $row['appointment_date'];?></td>
                <td><?php echo $row['appointment_time'];?></td>
                <tr>
            <?php    
                }
            ?>
            </tr>
    </table>
</body>
</html>