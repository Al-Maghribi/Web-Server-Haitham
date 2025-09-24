<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>

    <body>
        <p>Your name is <?= htmlspecialchars($_POST['fname']) . " " . htmlspecialchars($_POST['lname'])?>.</p>
        <p>You are <?= htmlspecialchars($_POST['age'])?> years old.</p>
    </body>
</html>