<!DOCTYPE html>
<html>
    <head>
        <title>Sensor Page</title>
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
    </body>
</html>