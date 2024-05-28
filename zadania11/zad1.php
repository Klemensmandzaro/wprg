<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class NoweAuto{
            public $name="";
            public $cena=0;
            public $kurs=0;
            function __construct($name, $cena, $kurs) {
                $this->name = $name;
                $this->cena = $cena;
                $this->kurs = $kurs;
            }

            function ObliczCene(){
                echo ($this->cena*$this->kurs);
            }
    
        }
        $auto= new NoweAuto("Skoda",20,30);
        $auto->ObliczCene();
    ?>
</body>
</html>