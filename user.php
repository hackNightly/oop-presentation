<?php
class User
{
		// property declaration
		public $name = 'Joe Schmoe';

		// method declaration
    public function sayHi() {
        echo $this->name.' says hello!';
    }
}
?>

// $user = new User();
// $user->sayHi(); >>> Joe Schmoe says hello!
