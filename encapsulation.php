<?php
class Animal
{		
		public  $legs 	= 2;
		// Can only be accessed from within class.
		private $privy  = 'You touched my private members.';

		// PHP also has protected keyword, making a variable
		// or method accessible by the class and any class that extends it.
		
    public function getPrivy() {
    	echo $this->privy;
    }
}
?>

// $animal = new Animal();

// echo $animal->legs   >>> 2
// echo $animal->privy  >>> Fatal error: Cannot (acc) (prop) Animal::$privvy

// $animal->getPrivy(); >>> You touched my private members.
