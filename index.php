<?php
include_once "classes/simmpleClass.classes.php";

$obj=new SimpleClass();
$obj->helloWorld();

$newobj=new class{

	public function helloWorld(){
		echo "Hello World!";

	}
};
$newobj->helloWorld();