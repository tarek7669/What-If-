function change() {
	var email = document.form.email.value,
		userName = document.form.username.value,
		pass = document.form.password.value,
		birth = document.form.birthday.value;

	if (pass.length <= 5)
	{
		alert("The password is less than 6 character");
	}
	else
	{
		window.location.replace('Home.html');
		alert("eshteghalet");
	}
}