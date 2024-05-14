<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!$plik=fopen('licznik.txt','r+')){
            
            echo "Nie można otworzyć pliku test.txt";
            $plik=fopen('licznik.txt','w+');
            fwrite($plik, 1);
            echo '1';
        }
        else
        {
            
            $str = fgets($plik);
            $str = trim($str);
            rewind($plik);
            $ile=(intval($str)+1);
            echo $ile;
            fwrite($plik, $ile);
            
            
        }
        fclose($plik);
        
    ?>
</body>
</html>