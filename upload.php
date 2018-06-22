<?php
include_once('includes/bovenstuk.php');
include_once('config.php');
?>
<div class="container">
<?php if(isLoggedIn()): ?>
<h2>Bestand Uploaden</h2>
<form id="form_upload" action="uploadp.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-group">
            <label for="input-name">Bestands Naam</label>
            <input type="text" name="name" class="form-control" id="input-name" value="">
          </div>
          <div class="form-group">
            <label for="input-author">Auteur</label>
            <input type="text" name="author" class="form-control" id="input-author" value="<?php echo htmlspecialchars($_SESSION['username']); ?> ">
          </div>
          <div class="form-group">
            <label for="input-category">Categorie</label>
            <select name="category_id" id="input-category" class="form-control select2-hidden-accessible" aria-hidden="true">
              <option disabled="" selected="">Selecteer een categorie</option>
                  <option data-slug="tools" value="1">Tools</option>
                  <option data-slug="vehicles" value="2">Vehicles</option>
                  <option data-slug="paintjobs" value="8">Aircrafts</option>
                  <option data-slug="weapons" value="3">Codes</option>
                  <option data-slug="scripts" value="4">Hacks</option>
                  <option data-slug="player" value="5">Music</option>
                  <option data-slug="maps" value="6">Pictures</option>
                  <option data-slug="misc" value="7">NSFW</option>
            </select>
          </div>
        </div>
          <div class="form-group">
            <label for="input-description">Beschrijving van het bestand</label>
            <textarea name="image_text" id="input-description" class="form-control" rows="10" placeholder="Schrijf hier wat informatie over het bestand dat je gaat uploaden..."></textarea>
            <p class="help-block">
              <small>LET OP je kunt maar een paar HTML codes gebruiken: &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;a&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;</small>
            </p>
          </div>
        </div>
      </div>
    </div>                                                                                                                                                              
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-body">
          <label for="input-images">Foto's toevoegen</label> <small>(.jpg of .png - Maximaal 18, 2Mb per afbeelding.)</small>
          <input type="file" name="image" id="input-images" accept="image/jpeg, image/png" multiple="" required>
          <div class="image-list row ui-sortable">
            <div class="template image-item col-xs-6 col-md-4 ui-sortable-handle" style="">
            <span class="thumbnail">
              <img class="img-responsive">
            </span>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-success btn-sm">
        Klaar, volgende stap.
      </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  <h4>Regels waar je je aan moet voldoen</h4>
  <div class="well">
              <p>
                <strong>Houd je aan de onderstaande regels, doe je dit niet kunnen er maatregelen worden genomen.</strong>
              </p>
              <ul>
                    <li>
                      Bestanden die zijn toegestaan: .zip &amp; .rar
                    </li>
                    <li>
                      Heb je geen toestemming om het bestand te uploaden, niet doen
                    </li>
                    <li>
                      Geen pornografische dingen in de <i>niet</i> NSFW sectie
                    </li>
                    <li>
                      Geen conflicten beginnen door bepaalde dingen in je beschrijving of wat dan ook te zetten
                    </li>
                    <li>
                      Alle rechten gaan naar de rechtmatige eigenaar
                    </li>
                    <li>
                      Heb je een bepaald iets van iemand anders in je file, zet hem dan ook in de beschrijving van je bestand
                    </li>
              </ul>
            </div>
</div>
    <?php endif; ?>
    <?php if(isNotLoggedIn()): 
     

      ?>

      <br>
      <div class="well">
        <p>Je moet ingelogd zijn om een bestand te kunnen uploaden.</p>
        <p>Heb je al een account? <a href="login.php">Log dan hier in!</a></p>
        <p>Heb je nog geen account? <a href="register.php">Maak dan hier GRATIS een account!</a></p>
      </div>
      <?php endif; ?>
<?php 

// if (isset($_POST['submit'])) {
  

// $sql = "

// INSERT INTO uploads (
//     image_ID,
//     image_text,
//     auteur,
//     inhoud
// ) VALUES (
//     :image_ID,
//     :image_text,
//     :auteur,
//     :inhoud
// )";
// fbsql_db_query($pdo, $sql, [
//   ':image_ID' => 



// ])


// }



// $db = mysqli_connect("localhost", "root", "", "scnproject");

//   // Initialize message variable
//   $msg = "";

//   // If upload button is clicked ...
//   if (isset($_POST['submit'])) {
//     // Get image name
//     $image = $_FILES['image_ID']['name'];
//     // Get text
//     $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
//     // get auteur
//     $auteur = $_SESSION['username'];


//     // image file directory
//     $target = "images/".basename($image);

//     $sql = "INSERT INTO pictures (image_ID, image_text, auteur) VALUES ('$image', '$image_text', 'auteur_ID')";
//     // execute query
//     mysqli_query($db, $sql);

//     if (move_uploaded_file($_FILES['image_ID']['tmp_name'], $target)) {
//       $msg = "Image uploaded successfully";
//     }else{
//       $msg = "Failed to upload image";
//     }
//   }


// include_once('includes/onderstuk.php');
// ?>