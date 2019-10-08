<?php include "Valikko.php"; ?>
	<h2>Selaa</h2>
	<p>
		Selaus sivuu
	</p>
<?php
session_start();
if(isset($_SESSION['logged_in'])) {
  echo '<p>Olet kirjautunut '.$_SESSION['username'].'</p>';
}
else {
  echo '<p> Tunnus tai salasana väärin</p>';
}
?>
<?php include "footter.php"; ?>
