<meta charset="utf-8">
<?php 
	$a = 5;
	if($a % 2 == 0)
		echo "<h1>$a là số chẵn</h1>";
	else
		echo "<h1>$a là số lẻ</h1>";
 ?>
<?php if($a % 2 == 0): ?>
 	<h1><?php echo $a; ?> là số chẵn</h1>
<?php else: ?> 	
	<h1><?php echo $a; ?> là số lẻ</h1>
<?php endif; ?>