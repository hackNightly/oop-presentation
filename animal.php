<?php
class Animal
{
		public $action = 'walking';
		public $legs   = 4;

    public function move() {
        echo "I'm ".$this->action." on ".$this->legs." legs!";
    }
}
?>

// $animal = new Animal();
// $animal->move(); >>> "I'm walking on 4 legs!"
