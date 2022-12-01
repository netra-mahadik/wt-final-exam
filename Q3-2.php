<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    date_default_timezone_set("Asia/Kolkata");
    $time = date('H');
    if ($time < 12) {
        echo "Good Morning";
    } else if ($time < 17) {
        echo "Good Afternoon";
    } else if ($time < 20) {
        echo "Good Evening";
    } else {
        echo "Good Night";
    }
    ?>
</body>

</html>