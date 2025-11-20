<?php
echo "<h2>Tekstifunktsioonid</h2>";
$tekst = 'PHP on skriptikeel serveripoolne';
$tekst2 = '     PHP on skriptikeel serveripoolne     ';

function clearVarsExcept($url, $varname){
    $url = basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
?>

<div class="flex-container">
    <div>
        <h3>Põhilised tekstifunktsioonid</h3>
        <?php
        echo $tekst."<br>";
        echo "teksti pikkus - strlen() = ".strlen($tekst)." tähemärki<br>";
        echo "Esimesed 6 tähte - substr() = ".substr($tekst, 0, 6)."<br>";
        echo "Alates 6 tähest = ".substr($tekst, 6)."<br>";
        echo "Sõnade arv lauses - str_word_count() = ".str_word_count($tekst)." sõna<br>";
        echo "Kõik tähed suured - strtoupper() = ".strtoupper($tekst)."<br>";
        echo "Kõik tähed väikesed - strtolower() = ".strtolower($tekst)."<br>";
        echo "Iga sõna algab suure tähega - ucwords() = ".ucwords($tekst)."<br>";
        ?>
        <br>

        <h4>Trim funktsioonid</h4>
        <?php
        echo "|".$tekst2."|<br>";
        echo "trim() = ".trim($tekst2)."<br>";
        echo "ltrim() = ".ltrim($tekst2)."<br>";
        echo "rtrim() = ".rtrim($tekst2)."<br>";
        ?>
    </div>

    <div>
        <h3>Tekst kui massiiv</h3>
        <?php
        echo "1. täht = ".$tekst[0]."<br>";
        echo "5. täht = ".$tekst[4]."<br>";
        print_r(str_word_count($tekst, 1));
        echo "<br>";
        $syna = str_word_count($tekst, 1);
        echo "Massiivist 2. sõna = ".$syna[2]."<br>";
        print_r(str_word_count($tekst, 2));
        ?>
        <br>

        <h4>Asendus (replace)</h4>
        <?php
        $asendus = "Javascript";
        echo substr_replace($tekst, $asendus, 0, 3)."<br>";
        echo substr_replace($tekst, "kliendipoolne", 19)."<br>";
        $otsi = array('PHP','serveripoolne');
        $asenda = array('Javascript','kliendipoolne');
        echo str_replace($otsi, $asenda, $tekst)."<br>";
        ?>
    </div>

    <div>
        <h3>Mõistatus: Arva Eesti linn</h3>
        <?php
        $linn = "Rakvere";
        echo "<ol>";
        echo "<li>".strlen($linn)." tähemärki</li>";
        echo "<li>".$linn[0]." — esimene täht</li>";
        echo "<li>".$linn[6]." — viimane täht</li>";
        echo "<li>".$linn[4]." — viies täht</li>";
        echo "<li>".substr($linn, 3)." — sõna teine pool</li>";
        echo "</ol>";
        ?>

        <form name="tekstkontroll" action="<?= clearVarsExcept($_SERVER['REQUEST_URI'], "link") ?>" method="post">
            <label for="linn">Sisesta linnanimi:</label>
            <input type="text" id="linn" name="linn">
            <input type="submit" value="Kontrolli">
        </form>

        <?php
        if (isset($_REQUEST["linn"])) {
            $vastus = strtolower($_REQUEST["linn"]);
            if ($vastus == "rakvere") {
                echo $_REQUEST["linn"] . " on õige!";
            } else {
                echo $_REQUEST["linn"] . " on vale!";
            }
        }
        ?>
    </div>
</div>


