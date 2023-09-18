//CREATING CLASS & OBJECT:

<?php

class MyComputer{
    public $price=80000;
	public function keyboard(){
		$p=new MyComputer();
		$lapname="model name is lenovo";
		$laptop='lenovo laptop price is';
		echo "demo invoking:";
		 echo "<br>";
		  echo $lapname;
		    echo "<br>";
		     echo $laptop." ".$p->price;
		      echo "<br>";

	                  //(OR)

	          echo $laptop." ".$this->price;//(this) is pre-defined object for class.        	    
	}
}
$obj=new MyComputer();
$obj->keyboard();

?>