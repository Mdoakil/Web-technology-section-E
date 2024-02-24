<!DOCTYPE html>
<html>
<head>
    <title>Odd or Even Checker</title>
</head>
<body>
    <h1>Odd or Even Checker</h1>
    <form method="post">
        Enter a number: <input type="number" name="number"><br><br>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if (isset($_POST['check'])) {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo "The number $number is even.";
        } else {
            echo "The number $number is odd.";
        }
    }
    ?>
</body>
</html>
