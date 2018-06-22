<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <title>LOGS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
<div class="container-fluid text-center">
    
        <h3>BRONNEN</h3>
        <p><a href="https://www.w3schools.com/icons/fontawesome_icons_webapp.asp">https://www.w3schools.com/icons/fontawesome_icons_webapp.asp</a></p>
        <p><a href="https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php">https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php</a></p>
        <p><a href="https://getbootstrap.com/">https://getbootstrap.com/</a></p>
        <p><a href="https://www.youtube.com/watch?v=Pz5CbLqdGwM">https://www.youtube.com/watch?v=Pz5CbLqdGwM</a></p>
        <p><a href="https://www.youtube.com/watch?v=xb8aad4MRx8&t=3968s">https://www.youtube.com/watch?v=xb8aad4MRx8&t=3968s</a></p>
        <p><a href="https://www.youtube.com/watch?v=e8TP2FERKls&t=1117s">https://www.youtube.com/watch?v=e8TP2FERKls&t=1117s</a></p>
        <p><a href="https://www.youtube.com/watch?v=bjT5PJn0Mu8">https://www.youtube.com/watch?v=bjT5PJn0Mu8</a></p>
        <p><a href="http://codingcyber.org/simple-login-script-php-and-mysql-64/">http://codingcyber.org/simple-login-script-php-and-mysql-64/</a></p>
        <p><a href="http://codingcyber.org/simple-user-registration-script-in-php-and-mysql-84/">http://codingcyber.org/simple-user-registration-script-in-php-and-mysql-84/</a></p>
        <p><a href="http://codingcyber.org/simple-login-script-php-and-mysql-64/">http://codingcyber.org/simple-login-script-php-and-mysql-64/</a></p>
        <p><a href="http://codingcyber.org/check-username-availability-with-jquery-in-php-and-mysql-86/">http://codingcyber.org/check-username-availability-with-jquery-in-php-and-mysql-86/</a></p>
        <p><a href="https://www.phphulp.nl/php/script/beveiliging/login-system-met-mysql/1606/">https://www.phphulp.nl/php/script/beveiliging/login-system-met-mysql/1606/</a></p>
        <p><a href="https://www.w3schools.com/php/php_date.asp">https://www.w3schools.com/php/php_date.asp</a></p>
        <p><a href="https://getbootstrap.com/docs/4.0/components/buttons/">https://getbootstrap.com/docs/4.0/components/buttons/</a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href="https://stackoverflow.com/questions/6185319/how-to-locate-the-php-ini-file-xampp">https://stackoverflow.com/questions/6185319/how-to-locate-the-php-ini-file-xampp</a></p>
        <p><a href=""></a></p>
        <p><a href="https://www.w3schools.com/php/php_syntax.asp">https://www.w3schools.com/php/php_syntax.asp</a></p>
        <p><a href="https://www.w3schools.com/pHP/default.asp">https://www.w3schools.com/pHP/default.asp</a></p>
        <p><a href="http://php.net/manual/en/ref.mysql.php">http://php.net/manual/en/ref.mysql.php</a></p>
        <p><a href="http://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database">http://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database</a></p>
        <p><a href="https://codex.wordpress.org/Function_Reference/is_admin">https://codex.wordpress.org/Function_Reference/is_admin</a></p>
        <p><a href="https://www.w3schools.com/bootstrap/bootstrap_buttons.asp">https://www.w3schools.com/bootstrap/bootstrap_buttons.asp</a></p>
        <p><a href="https://www.youtube.com/watch?v=OXwYU03FeEY&t=159s">https://www.youtube.com/watch?v=OXwYU03FeEY&t=159s</a></p>
        <p><a href="https://www.youtube.com/watch?v=UPMjx76OfsU">https://www.youtube.com/watch?v=UPMjx76OfsU</a></p>
        <p><a href="https://www.youtube.com/watch?v=xb8aad4MRx8">https://www.youtube.com/watch?v=xb8aad4MRx8</a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href="https://getbootstrap.com/docs/4.0/components/forms/">https://getbootstrap.com/docs/4.0/components/forms/</a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>
        <p><a href="http://php.net/manual/en/function.mysqli-connect.php">http://php.net/manual/en/function.mysqli-connect.php</a></p>
        <p><a href="https://stackoverflow.com/questions/20654848/html-php-display-username-after-success-login">https://stackoverflow.com/questions/20654848/html-php-display-username-after-success-login</a></p>
        <p><a href="http://php.net/manual/en/function.get-current-user.php">http://php.net/manual/en/function.get-current-user.php</a></p>
        <p><a href="https://www.w3schools.com/howto/howto_css_team.asp">https://www.w3schools.com/howto/howto_css_team.asp</a></p>
        <p><a href="https://www.w3schools.com/howto/howto_css_image_responsive.asp">https://www.w3schools.com/howto/howto_css_image_responsive.asp</a></p>
        <p><a href="https://www.w3schools.com/icons/">https://www.w3schools.com/icons/</a></p>
        <p><a href="https://www.w3schools.com/howto/howto_css_menu_icon.asp">https://www.w3schools.com/howto/howto_css_menu_icon.asp</a></p>
        <p><a href="https://www.youtube.com/watch?v=zvXgsouIzVg">https://www.youtube.com/watch?v=zvXgsouIzVg</a></p>
        <p><a href="https://www.youtube.com/watch?v=FgSysHTsb6A">https://www.youtube.com/watch?v=FgSysHTsb6A</a></p>
        <p><a href="https://www.youtube.com/watch?v=aIsu9SPcGbU&t=593s">https://www.youtube.com/watch?v=aIsu9SPcGbU&t=593s</a></p>
        <p><a href="https://www.w3schools.com/howto/howto_css_login_form.asp">https://www.w3schools.com/howto/howto_css_login_form.asp</a></p>
        <p><a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_text_buttons">https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_text_buttons</a></p>
        <p><a href="https://codepen.io/">https://codepen.io/</a></p>
        <p><a href=""></a></p>
        <p><a href=""></a></p>

      </div>
      <div class="col-md-4">
        <br><br><br><br>
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  </body>
  </html>