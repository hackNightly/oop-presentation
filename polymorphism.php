<?php
class Animal
{
	function __construct($name) {
		$this->name = $name;
	}
}

class Frog extends Animal
{
	function move() {
		return "I'm hopping on 2 legs!";
	}
}

class Snake extends Animal
{
	function move() {
		return "I'm slithering on 0 legs!";
	}
}
?>

// $frog  = new Frog('hopply');
// $snake = new Snake('hissly');
// $frog->name     >>> "hopply"
// $snake->name 	 >>> "hissly";
// $frog->move();  >>> "I'm hopping on 2 legs!"
// $snake->move(); >>> I'm slithering on 0 legs!

// BOOM, POLYMORPHISM. A frog moves like a frog. A snake moves like a snake.
// Look into composition vs inheritance. Trust me. Do it.
