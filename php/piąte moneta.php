<?php

$a=0;
$b=0;
for($i=0;$i<100;$i++)
{
    $los=rand(1,2);
    if($los==1)
    { 
        echo("<br>reszka");
        $a++;
    }
    else
    {
        echo("<br>orzeł");
        $b++;
    }

}
echo("<br>orłów jest : ");
echo($b);
echo("<br>reszek jest : ");
echo($a);
 if($a>$b){
     echo("reszek jest wiecej");
 }
 else if($a==$b){
     echo("Jest remis");
 }
 else{
     echo("orlow jest wiecej");
 }
       
    




?>
<html>
    <head></head>
<body>



</body>

</html>