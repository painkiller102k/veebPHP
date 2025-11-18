<?php
echo "<h2>GIT käsud</h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
    <pre>
        git config --global user.name "Martin Rossakov"
        git config --global user.email "mstislavlandsh@gmail.com"
        git config --global --list
    </pre>
</li>
<li>SSH key loomine
    <pre>
        ssh-keygen -o -t rsa -C "mstislavlandsh@gmail.com"
        C:\Users\opilane\.ssh .pub ( github repo / settings / deploy key )
    </pre>
</li>
<li>Jälgimise lisamine ja commit tegemine
    <pre>
        git status
        git add .
        git commit -a -m "commiti tekst"
    </pre>
</li>
<?php
echo "<li>GitHub projektiga sidumine";
echo "<pre>";
echo "git remote add origin git@github.com:painkiller102k/veebPHP.git;

git branch -M main;

git push -u origin main";

echo "</pre>";
echo "</li>";

echo "<li>Projekti kloonimine desktopi.<br>
    * Kontrolli, et id_rsa key on olemas .ssh kaustus<br>
    * GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone git@github.com:painkiller102k/veebPHP.git;";
echo "</pre>";
echo "</li>";
echo "</ol>";