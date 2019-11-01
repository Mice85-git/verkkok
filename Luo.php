<?php include "Valikko.php"; ?>
<?php include "connection.php"; ?>
	<h2>Luo käyttäjätunnus</h2>
<?php
	$asiakas=$db->query('SELECT * FROM asiakas');
	foreach ($asiakas as $row)	{
	//	echo $row['knimi'].' '.$row['salasana']. '<br>';
	}
	?>
<form class="" action="Luo.php" method="post">
	<input type="text" name="knimi" value="" placeholder="Käyttäjänimi"> <br>
	<input type="text" name="salasana" value="" placeholder="Salasana"> <br>

	<br>
	<input type="submit" name=" " value="Add">
</form>
<?php
$encrypted_pass = password_hash($_POST['salasana'],PASSWORD_DEFAULT);
$stmt=$db->prepare("INSERT INTO asiakas VALUES(:id_asiakas, :knimi, :salasana)");
$stmt->bindParam(':id_asiakas', $_POST['id_asiakas']);
$stmt->bindParam(':knimi', $_POST['knimi']);
$stmt->bindParam(':salasana',$encrypted_pass);
$stmt->execute();

?>
<?php include "footter.php"; ?>
