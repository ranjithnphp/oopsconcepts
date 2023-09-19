<?php

// Encapsulation:

// In encapsulation getter and setter option is used.

class Flowers{

	public $flowername;
	public $flowercolor;
	public $flowersize;

  public function setflowername($flowername){
  	$this->flowername=$flowername;
  	
  }
  public function getflowername(){
  	return $this->flowername;
  }

  public function setflowercolor($flowercolor){
  	$this->flowercolor=$flowercolor;
  }
  	 
  public function getflowercolor(){
  	return $this->flowercolor;
  	}

  public function setflowersize($flowersize){
  	$this->flowersize=$flowersize;
  }
  	
  	public function getflowersize(){
  		 return $this->flowersize; 
  	}
  
  
}

class Ans extends Flowers{ // inheritation also used.
	public function result(){
		$this->setflowername('the flower name is rose');
		echo $this->getflowername();echo "<br>";

		$this->setflowercolor('flower color is pink');
		echo $this->getflowercolor();echo "<br>";

		$this->setflowersize('flower size is small');
		echo $this->getflowersize();echo "<br>";

			}
}

$x=new Ans();
$x->result();