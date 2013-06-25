var User;

User = function User() {
	// Property declaration
	this.name  = 'Joe Schmoe';

	// Method declaration
	this.sayHi = function() {
		alert(this.name + ' says hello!');
	};
};

// var user = new User();
// user.sayHi()
// >>> 'Joe Schmoe says hello!'
