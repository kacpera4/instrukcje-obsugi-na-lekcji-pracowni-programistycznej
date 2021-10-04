<?php
$a=$_POST["licz"];
for($i = 0 ;$i < $a; $i++)
    {//! coś jest nie tak
        
        
        $los = rand (1,100);
        if($los%2==0)
        {
        echo ($los);
        echo ("<br>");
        }
    }



?>
<html>
    <head></head>
<body>


<form action="" method="POST">
<input type="text" name="licz">
<input type="submit" id="oblicz" value="oblicz">
</body>

</html>