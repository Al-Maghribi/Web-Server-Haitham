<!DOCTYPE html>
<html>
    <head>
        <title>LED Page</title>
        <?php
            $LED_status = isset($_POST['state']) ? $_POST['state'] : '';

            if($LED_status == 'on') {
                shell_exec("gpio write 25 1");
                $info = "LED is ON.";
            }
            elseif($LED_status == 'off') {
                shell_exec("gpio write 25 0");
                $info = "LED is OFF.";
            }
            elseif($LED_status == 'toggle') { 
                shell_exec("gpio toggle 25");
            }
            else {
                $info = "Error.";
            }

            $read_state = shell_exec("gpio read 25");
            if($read_state == "0"){
                $info = "LED is OFF.";
            }
            else {
                $info = "LED is ON.";
            } 
        ?>

    </head>
    <body>
        <p> <?php echo $info; ?> </p>
    </body>
</html>