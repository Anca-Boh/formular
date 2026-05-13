<!DOCTYPE html>
<head>
    <title>Kvizecek</title>
</head>
<body>



<?php
$body = 0;

if (!empty($_GET)) {

    if (isset($_GET["otazka1"]) && $_GET["otazka1"] == "Ano") {
        $body++;
    }

    if (isset($_GET["otazka2"]) && $_GET["otazka2"] == "Ne") {
        $body++;
    }

    if (isset($_GET["otazka3"]) && $_GET["otazka3"] == "Ne") {
        $body++;
    }

    if ($body == 3) {
        echo  "Máš 3 správné odpovědi z 3, jsi génius!";
        echo "<img src=paradinda.jpg>";
    } 
    elseif ($body == 2) {
        echo  "Máš 2 správné odpovědi z 3, nejsi lůzr ani génius.";
        echo  "<img src=skoro.jpg>";
    } 
    elseif ($body <= 1 ) {
        echo "Máš $body správných odpovědí z 3, zkus to znovu!";
        echo "<img src=smula.jpg>";
    }
} 
?>


<form>
    <label>Je tráva zelená?:</label>
    <input type="text" name="otazka1">


    <br>


    <label>Prší?:</label>
    <input type="text" name="otazka2">


    <br>


    <label>Je dneska neděle?:</label>
    <input type="text" name="otazka3">


    <br>

    <button>Odeslat</button>
</form>

</body>
</html>
