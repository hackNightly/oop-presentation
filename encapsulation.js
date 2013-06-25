var Animal;

Animal = function Animal() {
	// Our private 'animal' object;
	var _animal = {};

	// A private variable
	_animal.privy = 'You touched my private members.';

	// Don't return _animal, return an object that uses _animal
	return {
		getPrivy: function () {
			alert(_animal.privy);
		}
	};
};

var animal = new Animal();

animal.privy;       // >>> undefined
animal.getPrivy();  // >>> You touched my private members
