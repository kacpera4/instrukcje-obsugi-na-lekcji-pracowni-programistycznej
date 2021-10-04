<?php
$a=$_GET["licz"];

function fib($a)
{
    if($a==1)
    {
        return 1;
    }
   else if($a==0)
    {
        return 0;
    }
   else 
    {
        return fib($a-1)+ fib($a-2);
    }
}

echo (fib($a));
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


<form action="" method="GET">
<input type="text" name="licz">
<input type="submit" id="oblicz" value="oblicz">
</body>

</html>