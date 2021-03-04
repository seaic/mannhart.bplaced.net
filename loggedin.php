<?php 
  session_start();
?>
<html><head><title>Anmeldung</title></head>
<body>
Hallo, <?= $_SESSION["benutzer"] ?> die Anmeldung war erfolgreich.
<a href=../control/abmeldung.php>abmelden</a>
</body></html>