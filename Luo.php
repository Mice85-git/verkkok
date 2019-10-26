<?php include "Valikko.php"; ?>
<?php include "connection.php"; ?>
	<h2>Luo käyttäjätunnus</h2>
<?php
	$asiakas=$db->query('SELECT * FROM asiakas');
	foreach ($asiakas as $row)	{
		echo $row['enimi'].' '.$row['snimi'].' '.$row['osoite']. '<br>';
	}
	?>
<form class="" action="Luo.php" method="post">
	<input type="number" name="id_asiakas" value="" placeholder="id_asiakas"> <br>
	<input type="text" name="enimi" value="" placeholder="Etunimi"> <br>
	<input type="text" name="snimi" value="" placeholder="Sukunimi"> <br>
	<input type="text" name="osoite" value="" placeholder="Osoite"> <br>
	<br>
	<input type="submit" name=" " value="Add">
</form>
<?php
$stmt=$db->prepare("INSERT INTO asiakas VALUES(:id_asiakas, :enimi, :snimi, :osoite)");
$stmt->bindParam(':id_asiakas', $_POST['id_asiakas']);
$stmt->bindParam(':enimi', $_POST['enimi']);
$stmt->bindParam(':snimi', $_POST['snimi']);
$stmt->bindParam(':osoite', $_POST['osoite']);

if($stmt->execute()){
  echo 'Lisättiin asiakas: '.$_POST['id_asiakas'].' '.$_POST['enimi'].' '.$_POST['snimi'].' '.$_POST['osoite'];
}

?>
<?php include "footter.php"; ?>
