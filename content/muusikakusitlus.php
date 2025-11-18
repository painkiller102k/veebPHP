<h1>Muusika Küsimustik</h1>
<form id="muusikaVorm">
    <table>
        <tr>
            <td>
                Milliseid muusikuid/ansambleid sa tead?<br>
                <label><input type="checkbox" name="artist" id="drake" value="Drake" onchange="valimuusikuid()">Drake</label><br>
                <label><input type="checkbox" name="artist" id="travis" value="Travis Scott" onchange="valimuusikuid()">Travis Scott</label><br>
                <label><input type="checkbox" name="artist" id="carti" value="Playboy Carti" onchange="valimuusikuid()">Playboy Carti</label><br>
                <label><input type="checkbox" name="artist" id="uzi" value="Lil Uzi Vert" onchange="valimuusikuid()">Lil Uzi Vert</label><br>
                <label><input type="checkbox" name="artist" id="future" value="Future" onchange="valimuusikuid()">Future</label>
            </td>
            <td><div id="v1"></div></td>
        </tr>

        <tr>
            <td>
                Mida arvad muusika kuulamisest koolis?<br>
                <textarea id="arvamus" rows="3" cols="40" oninput="arvamusLugemine()"></textarea>
            </td>
            <td><div id="v2"></div></td>
        </tr>

        <tr>
            <td>
                Mitu tundi päevas sa kuulad muusikat?<br>
                <input type="number" id="tunnid" min="1" max="24" onchange="tunnidLugemine()">
            </td>
            <td><div id="v3"></div></td>
        </tr>

        <tr>
            <td>
                Kas sa kuulad raadiot?<br>
                <label><input type="radio" name="raadio" value="Ja" id="ja" onchange="raadioLugemine()">Jah</label>
                <label><input type="radio" name="raadio" value="Ei" id="ei" onchange="raadioLugemine()">Ei</label>
            </td>
            <td><div id="v4"></div></td>
        </tr>

        <tr>
            <td>
                Milliseid raadiojaamu oskad nimetada?<br>
                <input type="text" id="jaamad" oninput="jaamadLugemine()">
            </td>
            <td><div id="v5"></div></td>
        </tr>

        <tr>
            <td>
                Millist muusikat sa kõige rohkem kuulad?<br>
                <select id="muusikastiil" onchange="stiilLugemine()">
                    <option value="Metall">Pop</option>
                    <option value="Pop Rock">Räpp</option>
                    <option value="New Metall">Rock</option>
                    <option value="Hip Hop">Elektrooniline</option>
                    <option value="Trap">Jazz</option>
                    <option value="Klassikaline">Klassikaline</option>
                </select>
            </td>
            <td><div id="v6"></div></td>
        </tr>
    </table>
    <br>
    <button type="button">Saada</button>
    <button type="button" onclick="puhasta()">Puhasta</button>
</form>