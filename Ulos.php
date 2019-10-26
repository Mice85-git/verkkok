<?php include "Valikko.php"; ?>
	<?php
	  session_start();
    session_destroy();
header("Refresh:2; url=Etusivu.php");
		?>
	<p>
		Kirjauduit ulos
	</p>
<?php include "footter.php"; ?>
