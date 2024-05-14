<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (!$plik=fopen('adresy.txt','r+')){
            
            echo "Nie można otworzyć pliku test.txt";
        }
        else
        {
            
        while(!feof($plik)){
            $str = fgets($plik);
            $tab=explode(";",$str);
            
            echo "<a href=".$tab[0].">$tab[0]</a> $tab[1]";
            echo '<br>';
        }

        }
        fclose($plik);
        
    ?>
</body>
</html>