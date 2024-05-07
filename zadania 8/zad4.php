<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formularz1" method="POST">
        <input type="text" name="pierwsza">
        <button type="submit">Działaj</button>
    </form>
    <?php
        if (isset($_POST['pierwsza']))
        {
            $a=$_POST['pierwsza'];
            $b;
            $find=array('a','e','i','o','u');
            str_replace($find, '', $a,$b);
            echo $b;

        }
    ?>
</body>
</html>