<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "hindimam" && $password == "hindi_43")
{
echo "<centre><h1>Hello Hindi Jothi Mam</h1></centre>";
}
else {
  echo "invalid user and password combination";
}
?>