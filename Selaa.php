<?php include "Valikko.php"; ?>
<?php include "connection.php"; ?>

<?php
session_start();

if(isset($_SESSION['logged_in']))

{
	$malli=$db->query('SELECT * FROM malli');
	foreach ($malli as $row)	{
		echo $row['Mnimi']. '<br>';

	}
	?>
<?php include "footter.php"; ?>
