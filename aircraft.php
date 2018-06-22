<?php
include_once('includes/bovenstuk.php');
include_once('uploadp.php');
?>





<?php
while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo  . $row['image'] . $row['auteur'] . ;  //$row['index'] the index here is a field name
}
  ?>





<?php
include_once('includes/onderstuk.php');
?>