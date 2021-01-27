var mysql = require ('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "hr",
  password: "hr"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});