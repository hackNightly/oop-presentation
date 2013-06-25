var Animal, Frog;

// Base Animal 'class'
Animal = function Animal() {
	this.move = function () {
		alert("I'm " + this.action + ' on ' + this.legs + ' legs!');
	};
};

// Child frog 'class'
Frog = function Frog() {
	this.action = "hopping";
	this.legs		= 2;
};

// Here is our inheritance.
Frog.prototype = new Animal();
// Create a new frog
var frogger = new Frog();
// Move him.
frogger.move(); // >>> I'm hopping on 2 legs!
