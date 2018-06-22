<?php
include_once('includes/bovenstuk.php');
	$id=$_GET['id'];
	$result = $pdo->prepare("SELECT * FROM users WHERE id= :username");
	$result->bindParam(':username', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
		echo "<center>";
?>
<br>
<?php if(isLoggedIn()): ?>
<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="edit.php" method="POST">
          	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="rank" value="<?php echo $row['rank']; ?>">
            <legend class="text-center">Gegevens van: <i><?php echo $row['username']; ?></i></legend>
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Gebruikersnaam</label>
              <div class="col-md-9">
                <input name="username" type="text" value="<?php echo $row['username']; ?>" class="form-control-contact">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Wachtwoord</label>
              <div class="col-md-9">
                <input name="password" type="password" value="<?php echo $row['password']; ?>" class="form-control-contact">
              </div>
            </div>
            <?php if(adm_check()): ?>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Rank</label>
              <div class="col-md-9">
                <select type="text" name="rank" class="form-control-contact"> <option value="<?php echo $row['rank']; ?>"><?php echo $row['rank']; ?></option> 
                 <option value="gebruiker">Gebruiker</option> 
                 <option value="donateur">Donateur</option> 
                 <option value="vip">VIP</option> 
                 <option value="moderator">Moderator</option> 
                 <option value="administrator">Administrator</option>
                 <option value="beheer">Beheer</option>
                </select>
              </div>
            </div>
            <?php endif; ?>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Uw E-mail</label>
              <div class="col-md-9">
                <input name="email" type="text" value="<?php echo $row['email']; ?>" class="form-control-contact">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Gemaakt op</label>
              <div class="col-md-9">
                <input name="created_at" type="text" value="<?php echo $row['created_at']; ?>" class="form-control-contact">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-success">Opslaan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
	</div>
</div>
<?php endif; ?>
<?php
echo "</center>";
	}
?>