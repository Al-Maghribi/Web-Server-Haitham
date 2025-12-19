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
            
            
            
            $searchterm = mysqli_real_escape_string($conn, $_POST['fname']);
            $ip = mysqli_real_escape_string($conn, $_SERVER["REMOTE_ADDR"];);
            
            $sql = "INSERT INTO googleip (searchterm, ip) VALUES ('$searchterm', '$ip');";

            $result = mysqli_query($conn, $sql);

            mysqli_close($conn);
        ?>

    </head>
    <body>
        <p>The information has been submitted successfully!</p>
    </body>
</html>