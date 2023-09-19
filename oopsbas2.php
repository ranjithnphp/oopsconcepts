<?php

//Inheritance:

//creating multiple functions inside the class and using extends option. (EX:) In this below case the extends option used to access the variables or functions of numbers class using the object of math class.


class Numbers {
	public function comma(){
		$num=6867788;
		echo number_format($num);
	}

	public function flr(){
	    $num1=56.9;
		return floor($num1);
    }		
	
}

class Math extends Numbers{  // single inheritance
	public $no=65.8;
	public $no1=4;

	  public function round(){
		$a=new Math();
		return ceil($a->no);
		
    }

    public function sqt(){
        $b=new Math();
        echo sqrt($b->no1);
     }


}


class Lyears extends Math {  //multiple inheritance
	public function yrs(){
		$q=5.7;
		return round($q);

     }      //in this class if we create like class Lyears extends Numbers that's called Hierarchical. single class extends with multiple classes.
}


//creating objects and printing statement

 $obj1=new Lyears();

 echo $obj1->round();echo "<br>";

 $i=$obj1->comma();echo "<br>";

 echo $obj1->flr();echo "<br>";

 $obj1->sqt();echo "<br>";

 $year=2002;
 $x=$obj1->yrs();
 echo $x;

//type of inheritance:

 //->single - class extends one time with other class
 //->multilevel 
 //->multiple - (not woks in PHP)
 //->hierarchical - it's similar to single inheritance, but in this method not like multilevel method, only single class will extends with multiple class.


?>