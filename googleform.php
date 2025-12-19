<!DOCTYPE html>
<html>
    <head>
        <title>Google form response</title>
        <?php
            $server = "localhost";
            $username = "php";
            $password = "ben!2020";
            $database = "googlesearches";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            
            $_SERVER["REMOTE_ADDR"];
            
            $fname = mysqli_real_escape_string($conn, $_POST['fname']);
            $lname = mysqli_real_escape_string($conn, $_POST['lname']);
            $age = (int) $_POST['age'];
            
            $sql = "INSERT INTO info (first_name, last_name, age) VALUES ('$fname', '$lname', $age);";

            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
        ?>

    </head>
    <body>
        <p>The information has been submitted successfully!</p>
    </body>
</html>