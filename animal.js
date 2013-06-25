var Animal;

Animal = function() {
	this.action = 'walking';
	this.legs   = 4;

	this.move   = function() {
		alert("I'm " + this.action + ' on' + this.legs + ' legs!');
	};
};

var animal = new Animal();
animal.move();
// >>> I'm walking on 4 legs!
