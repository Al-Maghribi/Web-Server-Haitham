<!DOCTYPE html>
<html>
    <head>
        <title>LED Page</title>
        <?php
            $raw = shell_exec("./bme280");
            $deserialized = json_decode($raw, true);
            $temp = $deserialized["temperature"];
            $pressure = $deserialized["pressure"];
            $altitude = $deserialized["altitude"];
        ?>

    </head>
    <body>
        <p> <?php echo "Temperature: $temp °C"; ?> </p>
        <p> <?php echo "Pressure: $pressure hPa"; ?> </p>
        <p> <?php echo "Altitude: $altitude m"; ?> </p>


        <p><<?php
echo "User: " . shell_exec("whoami") . "<br>";
$raw = shell_exec("pwd");
echo "PWD: $raw<br>";
$raw = shell_exec("./bme280 2>&1"); // capture errors
var_dump($raw);
?>/p>
        
    </body>
</html>