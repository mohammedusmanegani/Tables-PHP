<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <form method="POST">
        <div>
            <input type="text" name="tableNum" placeholder="Enter table Number" required>
        </div>
        <div>
            <input type="text" name="tableLimit" placeholder="Enter the table limit" required>
        </div>
        <div>
            <button type="submit">Check</button>
        </div>
    </form>
    <?php
        echo "<p>";
        $tableNum = $_POST['tableNum'];
        $tableLimit = $_POST['tableLimit'];
        echo "</p>";
        $i = 1;
        for($i = 1 ; $i <= $tableLimit ; $i++)
        {
            $result = $tableNum * $i;
            echo $tableNum." X ".$i." = ".$result."<br>";
        }
    ?>
</body>
</html>