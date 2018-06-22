<?php
include_once('includes/bovenstuk.php');
?>
<?php
$result = $pdo->prepare("SELECT * FROM users");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
			$id = $row['id'];
			$username = $row['username'];
			$password = $row['password'];
			$rank = $row['rank'];
			$email = $row['email'];
			$created_at = $row['created_at'];
			?>
			<?php
echo "<td><a href='editform.php?id=$id'> Bewerken </a></td>"
?>
<?php
}
?>