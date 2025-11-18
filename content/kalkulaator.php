<h1>Random pilti näitamine</h1>
<table>
    <tr>
        <td>
            <input type="button" value="Random pilt" onclick="juhuslikPilt()">
            <br>
            <img src="" alt="Juhuslik pilt" id="pilt">
        </td>
        <td id="vastus">Vastus :</td>
        <td>
            <label for="valikud">Vali mida sa näed pildil:</label>
            <select name="valikud" id="valikud" onchange="teeOmaValik()">
                <option value="">- - - - -</option>
                <option value="image/1.png">Tõsine</option>
                <option value="image/2.png">Õnnelik</option>
                <option value="image/3.png">Kummaline</option>
                <option value="image/4.png">Vihane</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <label for="kogus">Mitu tk soovid osta?</label>
            <input type="number" id="kogus" min="1" max="100" value="10" onchange="arvutaPildiHind()">
        </td>
        <td>Summa:</td>
        <td id="summa"></td>
    </tr>
</table>

<br><br>

<h2>Joogikalkulaator</h2>
<table>
    <tr>
        <td>
            <input type="button" value="Vaata Pilti" onclick="juhuslikjook()">
            <br>
            <img src="" alt="Joogi pilt" id="image">
        </td>
        <td id="vastuss">Vastus :</td>
        <td>
            <label>Vali jook:</label><br>
            <input type="radio" name="valikudd" id="cola" value="image/cola.png" onchange="jookvalik()">
            <label for="cola">ColaCola</label><br>

            <input type="radio" name="valikudd" id="fanta" value="image/fanta.png" onchange="jookvalik()">
            <label for="fanta">Fanta</label><br>

            <input type="radio" name="valikudd" id="pepper" value="image/pepper.png" onchange="jookvalik()">
            <label for="pepper">Dr. Pepper</label><br>

            <input type="radio" name="valikudd" id="pepsi" value="image/pepsi.png" onchange="jookvalik()">
            <label for="pepsi">Pepsi</label><br>

            <input type="radio" name="valikudd" id="sprite" value="image/sprite.png" onchange="jookvalik()">
            <label for="sprite">Sprite</label><br>
        </td>
    </tr>
    <tr>
        <td>
            <label for="koguss">Mitu tk soovid osta?</label>
            <input type="number" id="koguss" min="1" max="100" value="10" onchange="arvutaJookHind()">
        </td>
        <td>Summa:</td>
        <td id="summaa"></td>
    </tr>
    <tr>
        <td colspan="3">
            <input type="button" value="Lisa 5% soodustus kliendikaardiga" onclick="rakendaJoogiSoodustus()">
        </td>
    </tr>
</table>