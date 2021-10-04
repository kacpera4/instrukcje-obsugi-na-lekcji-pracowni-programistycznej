<html>

<head></head>

<body>

<?php

$wyniki = array(0, 0, 0, 0, 0, 0);

for ($i = 0; $i < 100; $i++) {
    $los = rand(1, 6);
    if ($los == 1) {
        echo ("<br>*");
        $wyniki[0]++;
    } else if ($los == 2) {
        echo ("<br>**");
        $wyniki[1]++;
    } else if ($los == 3) {
        echo ("<br>***");
        $wyniki[2]++;
    } else if ($los == 4) {
        echo ("<br>****");
        $wyniki[3]++;
    } else if ($los == 5) {
        echo ("<br>*****");
        $wyniki[4]++;
    } else {
        echo ("<br>******");
        $wyniki[5]++;
    }
}
$odmiany = array("jedynek", "dwójek", "trójek", "czwórek", "piątek", "szóstek");

for ($i = 0; $i < 6; $i++) {
    echo("<br>" . $odmiany[$i] . " jest " . $wyniki[$i]);
}


?>

</body>

</html>