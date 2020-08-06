<meta charset="utf-8">
<?php 
	/*
		- Ham trong PHP
			- duoc dinh nghia: function tenham(){}
			- Cac loai ham:
				- Ham co tham so truyen vao. VD: function test1($bien1,$bien2){}
				- Ham khong co tham so truyen vao. VD: function test2(){}
				- Ham co gia tri tra ve. VD: function test3(){ return giaitri; }
			- goi ham: chi can ghi ten ham va tham so truyen vao (neu co)
		- Pham vi cua bien:
			- Bien cuc bo
				- Bien cuc bo la bien ton tai chi o ngoai ham hoac chi o trong ham
				- Neu o ngoai ham thi khong dung duoc trong ham
				- Neu o trong ham: khi ham thuc hien xong thi bien do mat di
			- Bien toan cuc
				- La bien co the dung duoc o ca ngoai ham va trong ham
				- Khai bao mot bien la bien toan cuc: su dung tu khoa global o dau ten bien
			- Bien tinh
				- Mot bien ton tai trong ham, neu ham thuc hien xong thi bien do mat di. Neu bien do la bien tinh thi khi ham thuc hien xong bien do van giu duoc gia tri
	*/
	function test1(){
		echo "<h1>Hàm không có tham số truyền vào</h1>";
	}
	function test2($str){
		echo "<h1>$str</h1>";
	}
	function test3(){
		$a = 5;
		return $a;
	}
	test1();
	test2("Hello world");
	test3();
	//----------
	$a = "Hello world";
	function hello(){
		//website se bao loi vi $a la bien cuc bo ben ngoai ham, khong dung duoc trong ham
		//muon su dung duoc bien $a ben trong ham thi phai khai bao bien nay thanh bien toan cuc
		global $a;
		echo "<h1>$a</h1>";
	}
	hello();
	//----------
	function test4(){
		static $a = 1;//dang ky bien a la bien tinh
		$a++;//<=> a = a + 1
		echo "<div>$a</div>";
	}
	test4();
	test4();
	test4();
	//----------
 ?>