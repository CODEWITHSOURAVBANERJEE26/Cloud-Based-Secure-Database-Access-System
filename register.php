<?php

include("db.php");

if(isset($_POST['register']))
{

$username=$_POST['username'];
$password=$_POST['password'];

$password=password_hash(
$password,
PASSWORD_DEFAULT
);

$stmt=$conn->prepare(
"INSERT INTO users(username,password)
VALUES(?,?)"
);

$stmt->bind_param(
"ss",
$username,
$password
);

$stmt->execute();

echo "Registration Successful";

}

?>

<form method="POST">

<input
type="text"
name="username"
placeholder="Username"
required>

<br><br>

<input
type="password"
name="password"
placeholder="Password"
required>

<br><br>

<input
type="submit"
name="register"
value="Register">

</form>
