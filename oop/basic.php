<?php

class Komputer{
	public $processor = "Intel Core I9";
	function __construct(){
		echo "Ini Construct Komputer";
	}
	public function __destruct(){
		echo "Ini Destruct Komputer";
	}
}


class Laptop extends AnotherClass
{
	
	function __construct(argument)
	{
		parent::__construct();
		echo "Ini Construct dari Laptop";
	}
	public function spesifikasi(){
		echo "Spesifikasi Laptop : ";
	}
	public function __destruct(){
		echo "Ini Destruct Laptop";
		parent::__destruct();
	}
}
$asus = new Laptop();
$asus->spesifikasi();
echo $asus->processor."<br>";
?>