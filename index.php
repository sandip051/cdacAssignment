<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM student ");
?>

<html>
<head>
<link rel="stylesheet" href="bootstrap.min.css">
     <script src="jquery.min.js"></script>
      <script src="bootstrap.min.js"></script>
    <title>Homepage</title>
</head>

<body>
<a href="Regi.html">Add New User</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>