<?php
$a= "15689255555555555555555555555";

function sumka($a)
    {
        $suma=0;

        for ($i= 0; $i< strlen($a); $i++) 
        {
            $suma+=$a[$i];
        }
        return $suma;
    }

$b=sumka($a);
$c=strval($b);
while($b>=10)
{
    echo $b,"<br>";
    $b=sumka($c);
    $c=strval($b);
}
echo $b;

