<?php

//Abstraction:
// in abstraction we have to create one abstract class it's only for declaration then create normal class for definition.

abstract class number{  //abstract class
	abstract function comma();

	abstract function flr();
}


class Numbers {
	public function comma(){
		$num=85433278;
		echo number_format($num);
	}

	public function flr(){
	    $num1=72.4;
		return floor($num1);
    }		
	
}

class Math extends Numbers{  // single inheritance
	public $no=83.8;
	public $no1=16;

	  public function rund(){
		$a=new Math();
		return ceil($a->no);
		
    }

    public function sqt(){
        $b=new Math();
        echo sqrt($b->no1);
     }
     
     public function comma(){
		$num=85433278;
		echo number_format($num);
	}

	public function flr(){
	    $num1=72.4;
		return floor($num1);
    }		
	

}

 $obj=new math();

 echo $obj->rund();echo "<br>";

 $i=$obj->comma();echo "<br>";

 echo $obj->flr();echo "<br>";

 $obj->sqt();echo "<br>";

 

?>
