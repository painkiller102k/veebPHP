<?php
echo  "<h2>Tekst funktsioonid</h2>";
$tekst = 'PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus - strlen() =".strlen($tekst)."tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte -substr() =".substr($tekst, 0,6);
echo "<br>";
echo "Alates 6 tähest = ".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses - str_word_count() = ".str_word_count($tekst). "sõna lauses";
echo "<br>";
echo "Kõik tähed on suured - strtoupper = ".strtoupper($tekst);
echo "<br>";
echo "Kõik tähed on vaiksed - strtolower = ".strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega - ucwords = ".ucwords($tekst);
echo "<br>";
echo ucwords(strtolower($tekst));
echo "<br>";
$tekst2 = '     PHP on skriptikeel serveripoolne     ';
//trim,ltrim,rtrim.
echo "|".$tekst2."|";
echo "<br>";
echo "trim() - eemaldab tekstist tühikuid paremalt ja vasakult =".trim($tekst2);
echo "<br>";
echo "ltrim() - eemaldab tekstist tühikuid paremalt ja vasakult =".ltrim($tekst2);
echo "<br>";
echo "rtrim() - eemaldab tekstist tühikuid paremalt ja vasakult =".rtrim($tekst2);
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "1.täht massiivist = ".$tekst[0];
echo "<br>";
echo "5.täht massiivist = ".$tekst[4];
echo "<br>";
//määrab iga sõna nagu eraldi element
print_r(str_word_count($tekst,1 )); // Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
echo "<br>";
$syna=str_word_count($tekst,1);
echo "<br>";
echo "massivist 2 sõna - ".$syna[2];
echo "<br>";
//määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst,2 ));
echo "<br>";
echo "<h4>Teksti asendamine - replace</h4>";
$asendus="Javascript";
echo substr_replace($tekst,$asendus,0,3);
echo "<br>";
//ise vaheta serveripoolne - kliendipoolne
echo substr_replace($tekst, "kliendipoolne", 19);
echo "<br>";
$otsi=array('PHP','serveripoolne');
$asenday=array('Javascript', 'kliendipoolne');
echo str_replace($otsi, $asenday, $tekst);
echo "<br>";
echo "<h5>Mõistatus. Arva ära Eesti linnanimi</h5>";
// tee 5-6 tekstfunktsiooni mis aitavad aru saada milline linnanimi
$linn = "Rakvere";
echo "<ol>";
echo "<li>".strlen($linn)." tähemärgi</li>";
echo "<li>".$linn[0]." esimene linna täht</li>";
echo "<li>".$linn[6]." viimane linna täht</li>";
echo "<li>".$linn[4]." viies linna täht</li>";
echo "<li>".substr($linn, 3)." - sõna teine pool</li>";
echo "</ol>";
?>

<form name="tekstkontroll" action="tekstFunktsioonid.php" method="post"
    <label for ="linn">Sisesta linnanimi : </label>
    <input type ="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>;
<?php
if(isset($_REQUEST["linn"])){
    $linn=$_REQUEST["linn"];
    if($_REQUEST["linn"] == "Rakvere"){
        echo $_REQUEST["linn"]. " on õige !";
    } else {
        echo $_REQUEST["linn"]." on vale !";
    }
}