<meta charset="utf-8">
<?php 
	$a = 1;
	$a = "Hello";
	//bien co the thay doi duoc gia tri moi luc, moi noi
	//hang khong the thay doi duoc gia tri, khai bao mot lan va dung mai mai	
 ?>
 <h1><?php echo __LINE__; ?></h1>
 <h1><?php echo __DIR__; ?></h1>
 <h1><?php echo __FILE__; ?></h1>
 <?php 
 	//khai bao mot bien la hang so
 	define("tenlop","PHP40");//string
 	echo "<h1>".tenlop."</h1>";//su dung bien hang so thi khong co dau $ o dau ten bien
 	define("nam",2019);//integer
 	echo "<h1>".nam."</h1>";
 	//nam = 2020; -> dong nay se bao loi vi hang so khong the thay doi duoc gia tri
  ?>