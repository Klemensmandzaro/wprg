<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <hr>
    <h2>Prosty</h2>
    <form name="formularz1" method="POST">
        <input type="number" name="pierwsza">
        <select name="operacja">
            <option value=1 selected>Dodawanie</option>
            <option value=2>Odejmowanie</option>
            <option value=3>Mnożenie</option>
            <option value=4>Dzielenie</option>
        </select>
        <input type="number" name="druga"><br>
        <button type="submit">Oblicz</button>
    </form>
    <hr>
    <h2>Zaawansowany</h2>
    <form name="formularz2" method="POST">
    <input type="number" name="trzecia">
        <select name="operacja2">
            <option value=1 selected>Cos</option>
            <option value=2>Sin</option>
            <option value=3>Tg</option>
            <option value=4>binarne na dziesietne</option>
            <option value=5>dziesietne na binarne</option>
            <option value=6>dziesietne na szesnastkowe</option>
            <option value=7>szesnastkowe na dziesietne</option>
        </select><br>
        <button type="submit">Oblicz</button>
    </form>
    <?php
    
        if (isset($_POST['pierwsza']))
        {
            $a=$_POST['pierwsza'];
            $b=$_POST['druga'];
            $c=$_POST['operacja'];

            switch ($c)
            {
                case '1':
                    echo $a+$b;
                    break;
                case '2':
                    echo $a-$b;
                    break;
                case '3':
                    echo $a*$b;
                    break;
                case '4':
                    echo $a/$b;
                    break;

            }
        }

        if (isset($_POST['trzecia']))
        {
            $d=$_POST['trzecia'];
            $e=$_POST['operacja2'];
            switch ($e)
            {
                case '1':
                    echo cos($d);
                    break;
                case '2':
                    echo sin($d);
                    break;
                case '3':
                    echo tan($d);
                    break;
                case '4':
                    $f=0;
                    for ($i = 0; $i <= strlen($d); $i++)
                    {
                        $f += (pow(2,$i)*$d[strlen($d)-$i-1]);
                    }
                    echo $f;
                    break;
            }
        }
        
    ?>
</body>
</html>