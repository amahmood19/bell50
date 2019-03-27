<h1>Bell Times</h1>
<table align="center">
<tr>
<th> Time </th>
<th> Bell </th>
</tr>

<?php
$btfile = fopen("belltimes.txt", "r") or die("Unable to open bell times file!");

// read each line and add it to the table
while(!feof($btfile))
{
    $line = fgets($btfile);
    $parts = explode(':', $line);
    echo "<tr><td>$parts[0]</td><td>$parts[1]</td></tr>";
} 
fclose($btfile);
?>
</table>
<br>