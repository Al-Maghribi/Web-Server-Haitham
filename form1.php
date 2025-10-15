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
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "INSERT INTO info (fname, lname, age) VALUES ('Hermione', 'Granger', 16);";

            $result = mysqli_query($conn, $sql);
        ?>

    </head>

    <body>
        <p>Your name is <?= htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname'])?>.</p>
        <p>You are <?= htmlspecialchars($_POST['age'])?> years old.</p>
    </body>
</html>