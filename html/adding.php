<?php require("header.php"); ?>

<h1> Adding time to the system</h1>
<p> <?php echo $_POST["bell_name"];?> has been set to ring at <?php echo $_POST["bell_time"];?> </p> 

<?php
// write the time to the end of the file
$myfile = fopen("belltimes.txt", "a") or die("Unable to open file!");
$txt = $_POST["bell_time"]. " : ". $_POST["bell_name"];
fwrite($myfile, $txt. "\n");
// $myfile = file_put_contents('belltimes.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
fclose ($myfile);
?>

<div style="text-align: center; font-size: 22px">
<a href="add.php" class="button large hpbottom"> Add another bell</a> 
<a href="index.php" class="button large hpbottom"> Back to Home</a>  
</div>

<?php require("footer.php"); ?>