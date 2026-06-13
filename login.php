<?php

session_start();

include("db.php");

if(isset($_POST['login']))
{

$username=$_POST['username'];
$password=$_POST['password'];

$stmt=$conn->prepare(
"SELECT password
FROM users
WHERE username=?"
);

$stmt->bind_param(
"s",
$username
);

$stmt->execute();

$stmt->store_result();

$stmt->bind_result(
$dbpassword
);

$stmt->fetch();

if(password_verify(
$password,
$dbpassword
))
{

$_SESSION['username']=$username;

header(
"Location: dashboard.php"
);

}

else
{

echo "Invalid Login";

}

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
name="login"
value="Login">

</form>
