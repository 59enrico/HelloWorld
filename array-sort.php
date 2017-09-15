<pre>
<?php
$winner = [];
$winner[] = "Papa";
$winner[] = "Mama";
$winner[] = "Schwester";
$winner[] = "Ich";
/*
array_push($winner, "Papa");
array_push($winner, "Mama");
array_push($winner, "Schwester");
array_push($winner, "Ich");
array_push($winner, "A");
*/

var_dump($winner);
sort($winner);
var_dump($winner);
?>

<hr />
<hr />
<?php
var_dump($winner[2]);
?>
</pre>