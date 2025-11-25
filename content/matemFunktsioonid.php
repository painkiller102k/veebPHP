<?php
echo "<h2>Matemaatilised tehted</h2>";
$arv1 = 1;
$arv2 = 2;
$arv3 = 3.456;

echo "Esimene arv on $arv1, Teine arv on $arv2";
echo "<br>";
echo "( + ) Liitmine = ".($arv1+$arv2);
echo "<br>";
echo "( - ) Lahutamine = ".($arv1-$arv2);
echo "<br>";
echo "( * ) Korrutamine = ".($arv1*$arv2);
echo "<br>";
echo "( / ) Jagamine = ".($arv1/$arv2);
echo "<br>";

echo "<h3>Matemaatilised funktsioonid</h3>";
echo "Kolmas arv on $arv3";
echo "<br>";
echo "( min ) Väiksem arv = ".min($arv1,$arv2);
echo "<br>";
echo "( max ) Suurem arv = ".max($arv1,$arv2);
echo "<br>";
echo "( round ) Ümardamine täisarvani = ".round($arv3);
echo "<br>";
echo "( ceil ) Ümardab jargmise arvuni = ".ceil($arv3);
echo "<br>";
echo "( floor ) Ümardab allapoole arvuni = ".floor($arv3);
echo "<br>";
echo "( round ) Ümardab ühe komma kohtani = ".round($arv3,1);
echo "<br>";
echo "( rand(1,100) ) Juhuslik arv 1-100 = ";
echo rand(1,100);
echo "<br>";
echo "( pow(arv2) ) Astendamine = ".pow($arv2,2);
echo "<br>";
echo "( sqrt(arv2) ) Ruutjuur = ".sqrt($arv2);
echo "<br>";
echo "( pi ) Pi arv = ".pi();
echo "<br>";

echo "<h4>Omistamise operaatorid</h4>";
$x = 10;
$y = 20;
echo "Esimene arv (x) on $x, Teine arv (y) on $y";
echo "<br>";

$x++; // $x = $x+1
$y--; // $y = $y-1
echo "( x++ ) Suurendamine ühevõrra = ".($x);
echo "<br>";
echo "( y-- ) Vahendamine ühevõrra = ".($y);
echo "<br>";
$x/=$y; // x= x/y
echo $x;
echo "<br>";
$nimi = "martin";
$perenimi = "rossakov";
echo $nimi;
echo "<br>";
printf("Tere %s %s", $nimi, $perenimi);
echo "<br>";

echo "<h4>Omistamise operaatorid</h4>";