<?php

	trait traitmessage1 {
		public function msg1(){
			echo " OOP in php is fun !";
		}
	}

	class welcome {

		use traitmessage1;

	}

	$obj = new welcome();

	$obj->msg1();


?>