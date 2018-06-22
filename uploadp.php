<?php

include_once('includes/bovenstuk.php');
  // Create database connection

  $db = mysqli_connect("localhost", "root", "", "scnproject");

  // Initialize message variable
  
  // If upload button is clicked ...
  if (isset($_POST['submit'])) {
	// get titel    

    // Get image name
    $image = $_FILES['image']['name'];
    // Get tex
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    // get auteur
    $auteur = $_SESSION['username'];
    // image file directory
    $target = "images/".basename($image);
    // get category

    $option = $_POST['category_id'];

    $sql = "INSERT INTO pictures (image, image_text, category_id) VALUES ('$image', '$image_text', '$option')";
    // execute query spring van een nog hogerebrug.txt.exe.php.html.css.psd.js.xex.ph.jpg.gif.doxc.png.bsdesign.bsh.xls.pdf.ps.dwf.kml.kmz.ppt.rtf
    
   
 
    
    
    	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
 

if($_POST['category_id'] == 1) {
	 $sql = "INSERT INTO tools (image, image_text, category_id,  auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 2) {
	 $sql = "INSERT INTO vehicles (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 3) {
	 $sql = "INSERT INTO codes (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 4) {
	 $sql = "INSERT INTO hacks (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 5) {
	 $sql = "INSERT INTO music (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 6) {
	 $sql = "INSERT INTO pictures (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 7) {
	 $sql = "INSERT INTO nsfw (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};


if($_POST['category_id'] == 8) {
	 $sql = "INSERT INTO aircraft (image, image_text, category_id, auteur) VALUES ('$image', '$image_text', '$option', '$auteur')";
};

echo $_POST['category_id'];

mysqli_query($db, $sql);

include_once('includes/onderstuk.php');




// $db = mysqli_connect("localhost", "root", "", "scnproject");

//   // Initialize message variable
//   $msg = "";

//   // If upload button is clicked ...
//   if (isset($_POST['submit'])) {
//   	// Get image name
//   	$image = $_FILES['image']['name'];
//   	// Get text
//   	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
//   	// get auteur
//   	$auteur = $_SESSION['username'];


//   	// image file directory
//   	$target = "images/".basename($image);

//   	$sql = "INSERT INTO pictures (image_ID, image_text, auteur) VALUES ('$image', '$image_text', 'auteur_ID')";
//   	// execute query
//   	mysqli_query($db, $sql);

//   	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//   		$msg = "Image uploaded successfully";
//   	}else{
//   		$msg = "Failed to upload image";
//   	}
//   }

?>

