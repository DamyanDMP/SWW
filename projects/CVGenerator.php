<html>
<head>
    <title></title>
</head>
<body>
<style>
    table, tr, td, th {
        border: 1px solid black;
    }
    #parrentLanguage, #parrentLevel{
        display: inline-block;
    }
    #parrentLang, #parrentRazbirane, #parrentWritting, #parrentReading{
        display: inline-block;
    }
    #parrentLevel{
        padding: 5px;
    }
    a, .check{
        padding: 4px;
        margin-right: 30px;
    }
    p{
        margin-bottom: 0px;
        padding-bottom: 0px;
    }
    #otherLanguagesContainer select{
        margin-right: 4px;
        margin-bottom: 2px;
    }
    a{
        position: relative;
        top: 5px;
        padding: 3px;
        background: linear-gradient(ghostwhite, gainsboro);
        color: black;
        text-decoration: none;
        border: 1px solid gray;
    }
    a:hover{
        background: lightblue;
    }
    button{
        padding: 10px;
        font-size: 20px;
    }

</style>
<script>
    var nextId = 0;
    function addInput() {
        nextId++;
        var newInput = document.createElement("div");
        newInput.setAttribute('id', 'num' + nextId);

        var selectContainer = document.createElement("div");
        selectContainer.setAttribute('id', 'num' + nextId);

        var newSelect = document.createElement("select");
        newSelect.setAttribute('name', 'programLevel[]');

        var option1 = document.createElement("option");
        option1.value = "begginer";
        option1.innerHTML = "Begginer";

        var option2 = document.createElement("option");
        option2.value = "medium";
        option2.innerHTML = "Medium";

        var option3 = document.createElement("option");
        option3.value = "high";
        option3.innerHTML = "High";

        selectContainer.appendChild(newSelect);

        //document.getElementById('language').appendChild(option1, option2, option3);
        newSelect.appendChild(option1);
        newSelect.appendChild(option2);
        newSelect.appendChild(option3);
        newInput.innerHTML = "\<input type=\'text\' name=\'programLang[]\'/\>";

        document.getElementById('parrentLanguage').appendChild(newInput);
        document.getElementById('parrentLevel').appendChild(selectContainer);


    }

    function removeLanguages() {
        var newInput = document.getElementById('num' + nextId);
        document.getElementById('parrentLanguage').removeChild(newInput);

        var selectContainer = document.getElementById('num' + nextId);
        document.getElementById('parrentLevel').removeChild(selectContainer);
        nextId--;
    }

    function addLang() {
        nextId++;
        var newInput = document.createElement("div");
        newInput.setAttribute('id', 'num' + nextId);

        var selectContainer = document.createElement("div");
        selectContainer.setAttribute('id', 'num' + nextId);

        var selectRazbirane = document.createElement("select");
        selectRazbirane.setAttribute('name', 'razbirane[]');
        selectRazbirane.style.marginLeft = '4px';

        var razbirane = document.createElement("option");
        razbirane.setAttribute('hidden', '');
        razbirane.value = "none";
        razbirane.innerHTML = "-Comprehension-";

        var razbirane1 = document.createElement("option");
        razbirane1.value = "low";
        razbirane1.innerHTML = "low";

        var razbirane2 = document.createElement("option");
        razbirane2.value = "medium";
        razbirane2.innerHTML = "Medium";

        var razbirane3 = document.createElement("option");
        razbirane3.value = "high";
        razbirane3.innerHTML = "High";

        selectContainer.appendChild(selectRazbirane);
        selectRazbirane.appendChild(razbirane);
        selectRazbirane.appendChild(razbirane1);
        selectRazbirane.appendChild(razbirane2);
        selectRazbirane.appendChild(razbirane3);


        var selectContainerRead = document.createElement("div");
        selectContainerRead.setAttribute('id', 'num' + nextId);

        var selectReading = document.createElement("select");
        selectReading.setAttribute('name', 'reading[]');

        var reading = document.createElement("option");
        reading.value = "none";
        reading.setAttribute('hidden', '');
        reading.innerHTML = "-Reading-";

        var reading1 = document.createElement("option");
        reading1.value = "low";
        reading1.innerHTML = "low";

        var reading2 = document.createElement("option");
        reading2.value = "medium";
        reading2.innerHTML = "Medium";

        var reading3 = document.createElement("option");
        reading3.value = "high";
        reading3.innerHTML = "High";

        selectContainerRead.appendChild(selectReading);
        selectReading.appendChild(reading);
        selectReading.appendChild(reading1);
        selectReading.appendChild(reading2);
        selectReading.appendChild(reading3);

        var selectContainerWriting = document.createElement("div");
        selectContainerWriting.setAttribute('id', 'num' + nextId);

        var selectWriting = document.createElement("select");
        selectWriting.setAttribute('name', 'writing[]');

        var writing = document.createElement("option");
        writing.value = "none";
        writing.setAttribute('hidden', '');
        writing.innerHTML = "-Writting-";

        var writing1 = document.createElement("option");
        writing1.value = "low";
        writing1.innerHTML = "low";

        var writing2 = document.createElement("option");
        writing2.value = "medium";
        writing2.innerHTML = "Medium";

        var writing3 = document.createElement("option");
        writing3.value = "high";
        writing3.innerHTML = "High";

        selectContainerWriting.appendChild(selectWriting);
        selectWriting.appendChild(writing);
        selectWriting.appendChild(writing1);
        selectWriting.appendChild(writing2);
        selectWriting.appendChild(writing3);

        newInput.innerHTML = "\<input type=\'text\' name=\'speakLang[]\'/\>";

        document.getElementById('parrentLang').appendChild(newInput);
        document.getElementById('parrentRazbirane').appendChild(selectContainer);
        document.getElementById('parrentReading').appendChild(selectContainerRead);
        document.getElementById('parrentWritting').appendChild(selectContainerWriting);
    }

    function removeLang() {
        var newInput = document.getElementById('num' + nextId);
        document.getElementById('parrentLang').removeChild(newInput);

        var selectRazbirane = document.getElementById('num' + nextId);
        document.getElementById('parrentRazbirane').removeChild(selectRazbirane);

        var selectReading = document.getElementById('num' + nextId);
        document.getElementById('parrentReading').removeChild(selectReading);

        var selectWritting = document.getElementById('num' + nextId);
        document.getElementById('parrentWritting').removeChild(selectWritting);

        nextId--;
    }
</script>
<?php
$displayForm = true;
if(isset($_GET['btn'])) {
    $displayForm = false;
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $number = $_GET['number'];
    $bDay = $_GET['bDay'];
    $national = $_GET['national'];
    $gender = "";
    $companyName = $_GET['companyName'];
    $dateFrom = $_GET['dateFrom'];
    $dateTo = $_GET['dateTo'];

    if(isset($_GET['male'])){
        $gender = "Male";
    } else {
        $gender = "Female";
    }

    echo "<h1>CV</h1>";
    echo "<table><tr><th colspan='2'>Personal information</th></tr>
        <tr><td>First name</td><td>$fname</td></tr>
        <tr><td>Last name</td><td>$lname</td></tr>
        <tr><td>Email</td><td>$email</td></tr>
        <tr><td>Phone number</td><td>$number</td></tr>
        <tr><td>Gender</td><td>$gender</td></tr>
        <tr><td>Birth day</td><td>$bDay</td></tr>
        <tr><td>Nationality</td><td>$national</td></tr>
    </table>";
    echo "<table><tr><th colspan='2'>Last work position</th></tr>
        <tr><td>Company name</td><td>$companyName</td></tr>
        <tr><td>From</td><td>$dateFrom</td></tr>
        <tr><td>To</td><td>$dateTo</td></tr>
    </table>";

    if (isset($_GET['programLang'], $_GET['programLevel'])) {
        $programLang = $_GET['programLang'];
        $programLevel = $_GET['programLevel'];

        echo "<table><tr><th colspan='3'>Computer skills</th></tr>
        <tr><td rowspan='10'>Programing language(s)</td>
        <th>Language</th><th>Skill level</th>";

        for ($i = 0; $i < count($programLang); $i++) {
            echo "<tr>";
            echo "<td>$programLang[$i]</td>";
            echo "<td>$programLevel[$i]</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    if (isset($_GET['speakLang'], $_GET['razbirane'], $_GET['reading'], $_GET['writing'], $_GET['driver'])) {
        $speakLang = $_GET['speakLang'];
        $razbirane = $_GET['razbirane'];
        $reading = $_GET['reading'];
        $writing = $_GET['writing'];
        $drive = $_GET['driver'];
        $length = count($speakLang) + 1;

        echo "<table><tr><th colspan='5'>Other skills</th></tr>
        <tr><th rowspan='$length'>Languages</th><th>Language</th><th>Comprehension</th><th>Reading</th><th>Writing</th></tr>";
        for ($i = 0; $i < count($speakLang); $i++) {
            echo "<tr><td>$speakLang[$i]</td><td>$razbirane[$i]</td><td>$reading[$i]</td><td>$writing[$i]</td></tr>";
        }
        echo "<tr><td>Driver's license</td><td colspan='4'>";
        for ($i = 0; $i<count($drive); $i++) {
            if ($i == count($drive)-1) {
                echo "$drive[$i]";
            } else {
                echo "$drive[$i], ";
            }
        }
        echo "</td></table>";
    }
}
if  ($displayForm){
    ?>
    <form method="get" name="cvForm">
        <fieldset>
            <legend>Personal information</legend>
            First name: <input type="text" name="fname"><br>
            Last name: <input type="text" name="lname"><br>
            Email: <input type="text" name="email"><br>
            Phone number: <input type="text" name="number"><br>
            Female: <input type="radio" name="female"> Male: <input type="radio" name="male"><br>
            Birth date:<br>
            <input type="date" name="bDay"><br>
            Nationality<br>
            <select name="national" >
                <option value="Bulgarian">Bulgarian</option>
                <option value="Germanian">Germanian</option>
                <option value="other">Other</option>
            </select>
        </fieldset>

        <fieldset>
            <legend>Last work position</legend>
            Company name: <input type="text" name="companyName"><br>
            From: <input type="date" name="dateFrom"><br>
            To: <input type="date" name="dateTo">
        </fieldset>

        <fieldset>
            <legend>Computer kills</legend>
            Programming Languages<br>

            <div id="parrentLanguage"></div><div id="parrentLevel"></div><br>

            <a href="javascript:removeLanguages()" id="removeLanguages" ">Remove line(s)>></a>
            <a href="javascript:addInput()" id="moreLanguages">Add line(s)>></a>
        </fieldset>

        <fieldset>
            <legend>Other skills</legend>
            <input type="text" name="speakLang[]">
            <select name="razbirane[]">
                <option hidden value = "none">-Comprehension-</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <select name="reading[]">
                <option hidden value = "none">-Reading-</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <select name="writing[]">
                <option hidden value = "none">-Writting-</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select><br>

            <div id="otherLanguagesContainer">
                <div id="parrentLang" class="row"></div><div id="parrentRazbirane" class="row"></div><div id="parrentReading" class="row"></div><div id="parrentWritting" class="row"></div><br>
            </div>
            <a href="javascript:removeLang()" id="removeLang" ">Remove line(s)>></a>
            <a href="javascript:addLang()" id="moreLang">Add line(s)>></a>

            <p>Driver's license</p>
            A<input type="checkbox" class="check" name="driver[]" value="A">
            B<input type="checkbox" class="check" name="driver[]" value="B">
            C<input type="checkbox" class="check" name="driver[]" value="C">
        </fieldset>

        <button name="btn">Get CV</button>
    </form>
<?php
}
?>
</body>
</html>