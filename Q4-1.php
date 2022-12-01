<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="" method="post">
        <table border="100">
            <tr>
                <td> <input type="text" name="salary" value="" placeholder="Enter basic salary" />
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $basic_salary = $_POST['salary'];
        if ($basic_salary < 1500) {
            $hra = 0.1 * $basic_salary;
            $da = 0.9 * $basic_salary;
            $g = $basic_salary + $da + $hra;
            echo "Gross Salary : " . $g . "/-";
        }
        if ($basic_salary >= 1500) {
            $hra = 500;
            $da = 0.98 * $basic_salary;
            $g = $basic_salary + $hra + $da;
            echo "Gross Salary : " . $g . "/-";
        }
        return 0;
    }
    ?>
</body>

</html>