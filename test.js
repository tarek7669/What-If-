function login(){
  
  var user = document.form.username.value,
      pass = document.form.password.value;

  var admin="admin";
  var passadmin="admin";

  if (document.form.username.value == admin && document.form.password.value == passadmin) { {
    
      alert("ghalat akbar ghalat");
      window.location.assign("index.html");
  }

  else if(user=="")
  {
    alert("Please enter your username");
    document.form.username.focus();
  }

  else if(pass=="")
  {
    alert("Please enter your password");
    document.form.password.focus();
  }

  else
  {
    alert("Welcome");
    document.location.assign("Index.html");
  }
}