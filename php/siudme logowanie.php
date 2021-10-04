<?php
$link=mysql_connect("localhost","","")
or die("Could not connect")
mysql_select_db("bazaosob")
 or die ("Could not delete database")
$query ="SELECT * FROM osoby";
$result=mysql_query($query)
or die("Query failed");

while($rpw=mysql_fetch_array($result)){
    echo"<TR><TD>".$row["imie"].
    "</TD><TD>".$row["nazwisko"].
    "</TD></TR>\n";
}
mysql_free_result($result);
mysql_close($link);
?>
<html>
    <head></head>
<body>


</body>

</html>