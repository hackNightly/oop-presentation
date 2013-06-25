<?php
class Animal
{
    public function move() {
        echo "I'm ".$this->action." on ".$this->legs." legs!";
    }
}

class Frog extends Animal
{
	public $action = "hopping";
	public $legs   = 2;
}
?>
// $frog = new Frog();
// $frog->move(); >>> "I'm hopping on 2 legs!"
