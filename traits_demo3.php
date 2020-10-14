<?php

	trait Reader{
		//function to do addtion and return addition
		public function add($var1,$var2){
			return $var1+$var2;
		}
	}
	trait Writer{
		//multiplication
		public function mul($var1,$var2){
			return $var1*$var2;
		}
	}

	class File {
		use Reader, Writer;

		public function calculate($var1,$var2){
				echo "Result of addition = ".$this->add($var1,$var2)."<br>";
				echo "Result of multiplication = ".$this->mul($var1,$var2)."<br>";
		}
	}


	$obj = new File();

	$obj->calculate(5,3);

?>