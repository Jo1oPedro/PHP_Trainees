<?php

class Matematica { 

    public static float $total = 0;

    public function somar($x, $y) {
        self::$total += $x + $y;
        return self::$total;
    }

    public static function somar2($x, $y) {
        self::$total += $x + $y;
        return self::$total;
    }
}


$matematica = new Matematica();
$matematica2 = new Matematica();

echo $matematica->somar(10, 20);

echo "<br/> <br/>";

echo $matematica2->somar(10, 20);

echo "<br/> <br/>";

echo Matematica::somar2(10, 20);