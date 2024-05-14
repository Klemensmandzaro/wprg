<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        if (!$plik1=fopen('ip.txt','r+')){
            
            echo "Nie można otworzyć pliku test.txt";
        }
        else
        {
            
            while(!feof($plik1)){
                $ip=$_SERVER['REMOTE_ADDR'];
                $str1 = fgets($plik1);
                if ($ip==$str1)
                {
                    include 'zad4.php';
                }
        }

        }
        fclose($plik1);
        
        
    ?>
    xxxddd
</body>
</html>