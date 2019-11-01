<?php include "Valikko.php"; ?>
<?php include "connection.php"; ?>
<?php
session_start();
$sql="SELECT * FROM malli";
$malli=$db->query($sql);

	?>
	<h2> Tuotteet</h2>
	<p>
		<ul>
			<?php
	foreach ($malli as $row)	{
		echo '<li>';
		echo $row['Mnimi']. '<br>';
		echo '<img src="tuotteet/'.$row['image'].'" alt="tuote kuva"> <br>';
		echo '<a href="Ostoskori.php?id_malli='.$row['id_malli'].'"> Ostoskoriin</a>';
	}
	echo '</li>';
	echo '<hr>';


	?>
</ul>
</p>
<?php include "footter.php"; ?>
