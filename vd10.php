<?php 
	/*
		- Trang thai cua trang:
			- Khi truy cap vao url cua mot website thi url do se o trang thai GET
			- Khi an nut submit form den mot trang thi trang do se o trang thai POST
			- Doi tuong $_SERVER["REQUEST_METHOD"] se hien thi trang thai trang
	*/
 ?>
 <h1><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
<meta charset="utf-8">
<fieldset style="width: 300px; margin:auto;">
	<legend>Form</legend>
	<!-- muon lay gia tri cua the form control (vd: textbox, textarea...) thi phai dat trong the form -->
	<!-- 
		form
			method="post" -> khi an nut submit thi du lieu se duoc truyen ngam tu trang nay den trang kia
			method="get" -> khi an nut submit thi du lieu se truyen den trang khac qua url
			muon form submit thi phai co nut <input type="submit">
			action="ten trang can submit den"
	 -->
	<form method="post" action="">
		<input type="text" name="txt" required> <input type="submit" value="Click">
	</form>
	<h1>
		<?php 
			//lay du lieu theo kieu POST
			//chu y: khi trang o trang thai POST thi moi dung duoc doi tuong $_POST, neu khong se bao loi
			if(isset($_POST["txt"]) == true){
				$str = $_POST["txt"];
				echo $str;
			}
		 ?>
	</h1>
</fieldset>