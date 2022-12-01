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
    if (isset($_POST["write_btn"])) {
        $file_name = $_POST["file_name"];
        $file_content = $_POST["file_content"];
        $file = fopen($file_name, "w") or die('Unable to open file!');
        fwrite($file, $file_content);
        fclose($file);
    }
    ?>
    <form action="" method="post">
        <label for="">Enter filename:</label>
        <input type="text" name="file_name">
        <br><br>
        <label for="">Enter Content:</label>
        <br>
        <textarea name="file_content" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Write" name="write_btn">
    </form>
</body>

</html>