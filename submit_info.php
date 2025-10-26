<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
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
            $lname = mysqli_real_escape_string($conn, $_POST['lname']);
            $age = (int) $_POST['age'];
            
            $sql = "INSERT INTO info (first_name, last_name, age) VALUES ('$fname', '$lname', $age);";

            $result = mysqli_query($conn, $sql);


            if ($result) {
                echo "Record inserted successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        ?>

    </head>

    <body>
        mysqli_close($conn);
        
    </body>
   
</html>