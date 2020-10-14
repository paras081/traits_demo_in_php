<?php
	trait message1{
		public function msg1(){
			echo "OOP in PHP";

			public function msg2(){
			echo "Traits in OOP-PHP";
		}
		
	}

	class Welcome{
		use message1;
	}

	$obj = new Welcome();
	$obj->msg1();
	
	echo "<br>";
	$obj->msg2();

?>