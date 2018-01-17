<?php
//echo $fio;
//echo $age;
//print_r($other);
?>
<h1><?=$title?></h1>
<form method="post">
	<input type="text" name="fio" value="<?=$fio?>">
	<input type="number" name="age" value="<?=$age?>">
	<button type="submit">Send</button>
</form>
