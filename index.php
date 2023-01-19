<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Previlage</title>
</head>

<body>

    <h1>DATABASE INFORMATION</h1>
    
    <?php
    include("config.php");

    $sqlget = "SELECT * FROM users";
    $sqldata = mysqli_query($link, $sqlget) or die ("ERROR: Could not fetch data.".sqlget_error());

    echo "<table>";
    echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Username</th> <th>Email Address</th> <th>Time Created</th> </tr>";

    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
        echo "<tr> <td>";
        echo $row['id'];
        echo "</td> <td>";
        echo $row['fname'];
        echo "</td> <td>";
        echo $row['lname'];
        echo "</td> <td>";
        echo $row['username'];
        echo "</td> <td>";
        echo $row['email'];
        echo "</td> <td>";
        echo $row['created_at'];
        echo "</td> </tr>";
    }

    echo "</table>";

    ?>

</body>
</html>