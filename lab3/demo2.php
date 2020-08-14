<?php
//sử dụng namespace
//khai báo namspace
namespace test\php1;
//khai báo class
class people{
	//các thuộc tính
	var $name;
	var $age;

	function __construct($cname, $cage)
	{
		$this->name = $cname;
		$this->age = $cage;
	}
	//định nghĩa một function
	function message(){
		echo "Xin chào $this->name";
	}
}