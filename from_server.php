<!DOCTYPE html>
<html>
    <head>
        <title>Name search</title>
        <?php
            $server = "localhost";
            $username = "php";
            $password = "ben!2020";
            $database = "userinfo";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }

            $fname = mysqli_real_escape_string($conn, $_POST['fname']);

            $sql = "SELECT * FROM info WHERE first_name = '$fname'";
            $result = mysqli_query($conn, $sql);

        ?>
    </head>
    <body>
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
            echo $row['first_name'] . " " . $row['last_name'] . " (" . $row['age'] . ")<br>";
            }

            mysqli_close($conn);
        ?>
    </body>
</html>

  
