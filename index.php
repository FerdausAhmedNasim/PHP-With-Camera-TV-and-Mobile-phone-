<?php
abstract class Eletronics
{	
	protected $Product;

	

	abstract public function Mobile(); 
	
}

class Mobile extends Eletronics
{	

	public function Mobile()
	{
		
	}

	public function getName()
	{
		return "Tecno Kc1";
	} 

	public function getColor()
	{
		return "Black";
	} 


	public function getmodel()
	{
		return "8400";
	} 



//2


	public function getName2()
	{
		return "Samsung";
	} 

	public function getColor2()
	{
		return "Silver";
	} 


	public function getmodel2()
	{
		return "J2";
	} 

	//3

	public function getName3()
	{
		return "VIVO";
	} 

	public function getColor3()
	{
		return "White";
	} 


	public function getmodel3()
	{
		return "Y11";
	} 




	//TV 4,5,6

	public function getName4()
	{
		return "Samsung";
	} 

	public function getColor4()
	{
		return "Black";
	} 


	public function getmodel4()
	{
		return "C4533";
	} 



//2


	public function getName5()
	{
		return "Sony";
	} 

	public function getColor5()
	{
		return "Black";
	} 


	public function getmodel5()
	{
		return "SJ27";
	} 

	//3

	public function getName6()
	{
		return "LG";
	} 

	public function getColor6()
	{
		return "Black";
	} 


	public function getmodel6()
	{
		return "LG75";
	} 

//Camera 7,8,9



	public function getName7()
	{
		return "Sony Ericson";
	} 

	public function getColor7()
	{
		return "Black";
	} 


	public function getmodel7()
	{
		return "SE547";
	} 



//2


	public function getName8()
	{
		return "Canon";
	} 

	public function getColor8()
	{
		return "Black";
	} 


	public function getmodel8()
	{
		return "Can-876";
	} 

	//3

	public function getName9()
	{
		return "Canon HTC";
	} 

	public function getColor9()
	{
		return "Black";
	} 


	public function getmodel9()
	{
		return "CH-876";
	} 

}





//mobile Show on browser
$Mobile1 = new Mobile();

echo "Mobile";

echo "<br>";
echo "<br>";

echo "The Mobile Phone Name is ". $Mobile1->getname() ;
echo "<br>";
echo "The Mobile Phone Colour is ". $Mobile1->getColor();
echo "<br>";
echo "The Mobile Phone Model is is ". $Mobile1->getmodel();

echo "<br>";
echo "<br>";


$Mobile2 = new Mobile();

echo "The Mobile Phone Name is ". $Mobile2->getname2();
echo "<br>";
echo "The Mobile Phone Colour is ". $Mobile2->getColor2();
echo "<br>";
echo "The Mobile Phone Model is is ". $Mobile2->getmodel2();

echo "<br>";
echo "<br>";

$Mobile3 = new Mobile();

echo "The Mobile Phone Name is ". $Mobile3->getname3();
echo "<br>";
echo "The Mobile Phone Colour is ". $Mobile3->getColor3();
echo "<br>";
echo "The Mobile Phone Model is is ". $Mobile3->getmodel3();
echo "<br>";
echo "<br>";

//TV
$Mobile4 = new Mobile();

echo "TV";

echo "<br>";
echo "<br>";

echo "The TV Name is ". $Mobile4->getname4() ;
echo "<br>";
echo "The TV Colour is ". $Mobile4->getColor4();
echo "<br>";
echo "The TV Model is is ". $Mobile4->getmodel4();

echo "<br>";
echo "<br>";


$Mobile5 = new Mobile();

echo "TV Name is ". $Mobile5->getname5();
echo "<br>";
echo "The TV Colour is ". $Mobile5->getColor5();
echo "<br>";
echo "The TV Model is is ". $Mobile5->getmodel5();

echo "<br>";
echo "<br>";

$Mobile6 = new Mobile();

echo "The TV Name is ". $Mobile6->getname6();
echo "<br>";
echo "The TV Colour is ". $Mobile6->getColor6();
echo "<br>";
echo "The TV Model is is ". $Mobile6->getmodel6();

echo "<br>";
echo "<br>";

// Camera 7,8,9

echo "Camera";

echo "<br>";
echo "<br>";

 $Mobile7 = new Mobile();



echo "TheCamerae Name is ". $Mobile7->getname() ;
echo "<br>";
echo "The Camera Colour is ". $Mobile7->getColor();
echo "<br>";
echo "The Camera Model is is ". $Mobile7->getmodel();

echo "<br>";
echo "<br>";


$Mobile8 = new Mobile();

echo "The Camera Name is ". $Mobile8->getname2();
echo "<br>";
echo "The Camera Colour is ". $Mobile8->getColor2();
echo "<br>";
echo "The MCameraModel is is ". $Mobile8->getmodel2();

echo "<br>";
echo "<br>";

$Mobile9 = new Mobile();

echo "The Camera Name is ". $Mobile9->getname3();
echo "<br>";
echo "The Camera Colour is ". $Mobile9->getColor3();
echo "<br>";
echo "The Camera Model is is ". $Mobile9->getmodel3();

?>