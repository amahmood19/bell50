<?php require("header.php"); ?>

<h1>Add Bell</h1>
<br>
<p>Use the form below to add a new bell to the system. Enter the time in the HHMM format and give the bell a name (e.g. Bell 1) </p>
<form action="adding.php" method="post">
Bell Name: <input type="text" name="bell_name"><br>
Bell Time: <input type="text" name="bell_time"><br>
<input type="submit">
</form>

<div style="text-align: center; font-size: 22px">
<a href="index.php" class="button large hpbottom"> Home</a>  |
<a href="delete.php" class="button large hpbottom"> Delete Bell </a>
</div>
<?php require("footer.php"); ?>