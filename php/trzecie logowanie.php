<?php
$login=$_POST["login"];
$pass=$_POST["pass"];


    if($login == "jacek" && $pass =="owca")
    {
        echo"zostałeś zalogowany";
        echo "<br>";
        $dlugosc=strlen($login);
        $dlugosc2=strlen($pass);
        $dlugosc3=$dlugosc2+$dlugosc;
        echo "<br> długość loginu: ";
        echo $dlugosc;

        echo "<br> długość hasła: ";
        echo $dlugosc2;
        echo "<br> długość hasła i loginu: ";
        echo $dlugosc3;
    }
   else 
   {
       echo " wyjazd type";
   }

/*
for($i = 0 ;$i < $a; $i++)
    {//! coś jest nie tak
        
        
        $los = rand (1,100);
        if($los%2==0)
        {
        echo ($los);
        echo ("<br>");
        }
    }
*/
?>
<html>
    <head></head>
<body>


<form action="" method="POST">
<input type="text" name="login">
<input type="text" name="pass">
<input type="submit" id="oblicz" value="oblicz">
</body>

</html>