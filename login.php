<?php

require_once 'config.php';
 

$username = $password = "";
$username_err = $password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    if(empty(trim($_POST["username"]))){
        $username_err = '<b>Gebruikersnaam invullen</b>';
    } else{
        $username = trim($_POST["username"]);
    }
    

    if(empty(trim($_POST['password']))){
        $password_err = '<b>Vul je wachtwoord in</b>';
    } else{
        $password = trim($_POST['password']);
    }
    

    if(empty($username_err) && empty($password_err)){

        $sql = "SELECT * FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){

            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            

            // $param_username = trim($_POST["username"]);
            

            if($stmt->execute()){

                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $hashed_password = $row['password'];
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['rank'] = $row['rank'];
                            $ip = $_SERVER['REMOTE_ADDR'];
                            header("location: index.php");
                            exit(0);
                        } else{

                            $password_err = 'Verkeerd wachtwoord.';
                        }
                    }
                } else{
                   
                    $username_err = 'Er is geen gebruikersnaam gevonden met jou opgegeven gebruikersnaam.';
                }
            } else{
                echo "Er ging wat fout man";
            }
        }
        

        unset($stmt);
    }
    

    unset($pdo);
}
?>
<?php
session_start();
include_once('functies/functions.php');
?>
    <head>
        <meta charset="UTF-8">
        <title>Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link rel="stylesheet" href="styles.css">
    </head>
    <div class="inloggen">
    <div class="landing-text-login">
        <h2 style="color: #fff;">Inloggen</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label><b>Gebruikersnaam</b></label>
                <input type="text" name="username"class="form-controll" value="<?php echo $username; ?>">
                <span style="font-size: 10px"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Wachtwoord</label>
                <input type="password" name="password" class="form-controll">
                <span style="font-size: 10px"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Login">
            </div>
            <p style="color: #fff;">Heb je nog geen account? <a href="register.php" style="text-decoration: none; color: #e7e7e7;"><i>Registreer je nu!</i></a></p>
            <p style="color: #fff;">Wachtwoord vergeten? <a href="resetpassword.php" style="text-decoration: none; color: #e7e7e7;"><i>Reset nu je wachtwoord!</i></a></p>
        </form>
    </div>
</div>
</body>
</html>