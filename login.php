<?php include "Valikko.php"; ?>
<?php
  $annettu_salasana=$_POST['password'];
  $annettu_tunnus=$_POST['username'];
  $oikea_salasana='pass123';
  if($annettu_salasana == $oikea_salasana) {
    session_start();
    $_SESSION['logged_in']=true;
    $_SESSION['username']=$annettu_tunnus;
    echo '<p>Olet kirjautunut sisään </p>';
    header("Refresh:0; url=Selaa.php");

}

else {
   echo '<p> Käyttäjätunnus tai salasana väärin </p>';
   header("Refresh:2; url=Kirjaudu.php");
 }
?>
	</div>
