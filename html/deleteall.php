<?php require("header.php"); ?>

<h1>Deleting all the saved times from the system</h1>

<?php
// clear the text file
$myfile = fopen("belltimes.txt", "w") or die("Unable to open file!");
fclose ($myfile);
?>

<div style="text-align: center; font-size: 22px">
<a href="index.php" class="button large hpbottom"> Back to Home</a>  
</div>

<?php require("footer.php"); ?>