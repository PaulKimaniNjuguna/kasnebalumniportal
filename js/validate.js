const validation = new JustValidate("#register");			

validation
	.addField("#name", [
	{
		rule: "required"
	}]);
