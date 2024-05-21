<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        
            if (isset($_COOKIE["licznik"]))
            {
                if ($_COOKIE["licznik"]>1)
                {
                    echo ("juz wyslales");
                }
                setcookie("licznik", $_COOKIE["licznik"]+=1, time()+15);
                
                
            }
            else
            {
                setcookie("licznik", 1, time()+15);
                echo ('<form><input type="checkbox" value="tak" name="jeden">tak<input type="checkbox" value="nie" name="dwa">nie<input type="submit"></form>');
            }
            
        
    ?>
</body>
</html>