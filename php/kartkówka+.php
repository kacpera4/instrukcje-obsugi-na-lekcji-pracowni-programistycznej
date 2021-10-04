<?php
$jeden=1;
$dwa=2;
$trzy=3;
$cztery=4;
$piec=5;
$sztka=6;
$nrjeden=0;
$nrdwa=0;
$nrtrzy=0;
$nrcztery=0;
$nrpiec=0;
$nrsztka=0;
for($i=1;$i<=15;$i++)
{
    $los=rand(1,6);
    {
        if($los==1)
        {
            echo("uczen nr ");
            echo($i);
            echo(" dostał jeden<br>");
            $nrjeden++;
        }
        else if($los==2)
        {
            echo("uczen nr ");
            echo($i);
            echo(" dostał dwa<br>");
            $nrdwa++;
        }
        else if($los==3)
        {
            echo("uczen nr ");
            echo($i);
            echo(" dostał trzy<br>");
            $nrtrzy++;
        } else if($los==4)
        {
            echo("uczen nr ");
            echo($i);
            echo(" dostał cztery<br>");
            $nrcztery++;
        } else if($los==5)
        {
            echo("uczen nr ");
            echo($i);
            echo(" dostał pięć<br>");
            $nrpiec++;
        }
        else if($los==6)
        {
            echo("uczen nr ");
            echo($i);
            echo(" dostał ocene celującą<br>");
            $nrsztka++;
        }
    }
}
if($nrjeden)

echo ("<br> średnia klasy to to: <br>");
echo (($jeden+$dwa+$trzy+$cztery+$piec+$sztka)/15);


?>
<html>
    <head></head>
<body>


</body>

</html>