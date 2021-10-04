<?php
$wartosc=$_POST["wartosc"];


for($i=0;$i<$wartosc;$i++)
{
    $los=rand(1,$wartosc);
    if($los%3==0)
    {
        echo($los);
        echo("<br>");
    }

}
//niby 4+





?>
<html>
    <head></head>
<body>


<form action="" method="POST">
<input type="number" name="wartosc">
<input type="submit" id="oblicz" value="oblicz">
</body>

</html>