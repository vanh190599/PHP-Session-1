<meta charset="utf-8">
<?php 
	for($i = 1; $i <= 5; $i ++){
		echo "<div>$i</div>";
	}
 ?>
<table cellpadding="5" border="1" style="width: 500px; border-collapse: collapse;">
	<?php for($i = 1; $i <= 5; $i ++): ?>
	<tr>
		<td><?php echo $i; ?></td>
	</tr>
	<?php endfor; ?>
</table> 