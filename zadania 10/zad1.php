<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    //var_dump($_COOKIE["licznik"]);
    if ($_COOKIE["licznik"]>=0)
    {
        
        setcookie("licznik", $_COOKIE["licznik"]+=1, time()+60*60);
        echo $_COOKIE["licznik"];

        if($_COOKIE["licznik"]==24)
        {
            echo ("WOW to już 24");
        }
    }
    else
    {
        setcookie("licznik", 1, time()+60*60);
        echo $_COOKIE["licznik"];
    }
    ?>
    
    <form method="POST" action="">
        <button type="submit" name="jeden">reset</button>
    </form>
    <?php
        if(isset($_POST['jeden']))
        {
            setcookie("licznik", 0, time()+60*60);
        }
        
    ?>
</body>
</html>