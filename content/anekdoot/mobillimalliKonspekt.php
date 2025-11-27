<?php

echo "<h2><strong>Mobiilisõbralik anekdootide veebileht</strong></h2>";

echo "<ol>";

echo "<li><strong>Ülesande kirjeldus</strong>";
echo "<pre>
Meie ülesanne oli luua mobiilisõbralik veebileht, kus saab näidata anekdoote.
Teknoloogiad: PHP (sisu laadimine TXT-failidest) ja HTML.
CSS tagab, et leht näeks hea välja nii arvutis kui ka telefonis.
</pre>";
echo "</li>";

echo "<li><strong>Nav menüü</strong>";
echo "<pre>
&lt;div class='menu'&gt;
    &lt;a href='teade.php'&gt;Teade&lt;/a&gt;
    &lt;a href='anekdoot1.php'&gt;Anekdoot 1&lt;/a&gt;
    &lt;a href='anekdoot2.php'&gt;Anekdoot 2&lt;/a&gt;
    &lt;a href='anekdoot3.php'&gt;Anekdoot 3&lt;/a&gt;
&lt;/div&gt;
</pre>";
echo "Selgitus: Menüü kuvab lingid kõigile lehtedele, et kasutaja saaks liikuda anekdootide ja teadete vahel.";
echo "</li>";

echo "<li><strong>Anekdoodi laadimine TXT-failist</strong>";
echo "<pre>
&lt;div class='anek'&gt;
    &lt;?php require('anekdoot1.txt'); ?&gt;
&lt;/div&gt;
</pre>";
echo "Selgitus: PHP „require“ lisab TXT-faili sisu otse HTML-i. See võimaldab anekdooti muuta ilma koodi muutmata. Nii on tehtud kõik anekdoodid, nagu anekdoot1 ; anekdoot2 ; anekdoot3.";
echo "</li>";

echo "<li><strong>Footer ja autor</strong>";
echo "<pre>
&lt;div class='footer'&gt;
    &lt;div class='autor'&gt;
        &lt;?php require('autor.txt'); ?&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>";
echo "Selgitus: Footer on kõigil lehtedel nähtav, autor on eraldi TXT-failis.";
echo "</li>";

// 6. Teate leht (teade.php)
echo "<li><strong>Teate leht (teade.php)</strong>";
echo "<pre>
&lt;?php require('anekheader.php'); ?&gt;

&lt;div class='content'&gt;
    &lt;h2&gt;Värske teade&lt;/h2&gt;

    &lt;div class='teade'&gt;
        &lt;?php require('teade.txt'); ?&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;?php require('anekfooter.php'); ?&gt;
</pre>";
echo "Selgitus: nähtav on päis ja jalus. div -i on lisatud tekst failist tease.txt abil require";
echo "</li>";



// 5. Mobiilivaade
echo "<li><strong>Mobiilivaade ja muutused</strong>";
echo "<br>";
echo "All on näited, kuidas leht näeb välja telefonis:";
echo "<br><a href='../../image/esimene.png' target='_blank'>
        <img src='../../image/esimene.png' alt='Mobiilivaade 1'>
      </a>";

echo "<br><a href='../../image/teine.png' target='_blank'>
        <img src='../../image/teine.png' alt='Mobiilivaade 2'>
      </a>";

echo "<br><a href='../../image/kolmas.png' target='_blank'>
        <img src='../../image/kolmas.png' alt='Mobiilivaade 3'>
      </a>";

echo "<br><a href='../../image/neljas.png' target='_blank'>
        <img src='../../image/neljas.png' alt='Mobiilivaade 4'>
      </a>";
echo "<pre>
Selgitus:
- Menüü muutub vertikaalseks
- Content ja anekdoodid mahuvad ekraanile, tekst ei lõiku välja
- Footer ja autor on nähtavad ning joondatud paremale
</pre>";
echo "</li>";
echo "</ol>";
echo "</body>";
echo "</html>";
?>
