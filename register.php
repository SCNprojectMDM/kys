<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password =  $email = "";
$username_err = $password_err = $confirm_password_err =  $email_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Vul een gebruikersnaam in.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Deze gebruikersnaam is al bezet!";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Er ging iets fout, probeer het later opnieuw.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Vul een wachtwoord in.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Wachtwoord moet tenminste 6 characters hebben.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Herhaal uw wachtwoord';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'De opgegeven wachtwoorden zijn niet het zelfde.';
        }
    }




        // Validate email
    if(empty(trim($_POST["email"]))){
        $website_err = "test";
    } else{
        // Prepare a select statement
        $sql = "SELECT email FROM users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':email', $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $email = trim($_POST["email"]);
                } else{
                echo "Oops! Something went wrong. Please try again later."; 

            }
        }
         
        // Close statement
        unset($stmt);
    }



    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password,  email) VALUES (:username, :password, :email)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);
            $stmt->bindParam(':password', $param_password, PDO::PARAM_STR);
            $stmt->bindParam(':email', $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}






?>
 
<!DOCTYPE HTML>
<html>
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
    <body>
    <div class="registreren">
    <div class="landing-text-login">
        <h2 style="color: #f8f8f8;">Registreren</h2>
        <p style="color: #f8f8f8;">Maak hier uw account aan!</p>
        <h6 style="color: red;">Met een * is verplicht!</h6>
        <h6>Heb je iets niet? Zet je een streep!</h6>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Gebruikersnaam *</label>
                <input type="text" name="username" class="form-controll" value="<?php echo $username; ?>" required>
                <span style="font-size: 15px; color: red"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Wachtwoord *</label>
                <input type="password" name="password" class="form-controll" value="<?php echo $password; ?>" required>
                <span style="font-size: 15px; color: red"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>" required>
                <label><b>Herhaal wachtwoord *</b></label>
                <input type="password" name="confirm_password" class="form-controll" value="<?php echo $confirm_password; ?>">
                <span style="font-size: 15px; color: red"><?php echo $confirm_password_err; ?></span>
            </div>
                <label>Email</label>
                <input type="email" name="email" class="form-controll" value="<?php echo $email; ?>" required>
                <br>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Registreren">
                <input type="reset" class="btn btn-danger" value="Opnieuw">
            </div>
            <p style="color: #f8f8f8;"">Heb je al een account? <a href="login.php" style="color: blue;">Log dan hier in!</a></p>
            <p style="font-size: 10px;">Bij het registreren ga je automatisch akkoord met onze regels!</p>
        </form>
    </div> 
    </div>   
</body>
</html>