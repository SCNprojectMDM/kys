<?php
// configuration
include('config.php');
 
// new data
$created_at = $_POST['created_at'];

$email = $_POST['email'];
$rank = $_POST['rank'];
$password = $_POST['password'];
$username = $_POST['username'];

$id = $_POST['id'];

$pw_changed = password_get_info($password);
if($pw_changed['algo'] == 0)
	$password = password_hash($password, PASSWORD_DEFAULT);


// query
$sql = "UPDATE users 
        SET username=:username, email=:email, password=:password, rank=:rank, created_at=:created
		WHERE id=:id";
$sql = $pdo->prepare($sql);
$sql->execute( [
	':username' => $username,
	':email' => $email,
	':password' => $password,
	':rank' => $rank,
	':created' => $created_at,
	':id' => $id
]);
header("location: profile.php");
 

// $2y$10$/Zaq/GLT3eY8felNi86mfuW2hgv0Ttm/Svnq86B7OQ8RRTkeTcD2C
// $2y$10$/Zaq/GLT3eY8felNi86mfuW2hgv0Ttm/Svnq86B7OQ8RRTkeTcD2C