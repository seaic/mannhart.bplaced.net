<?php 
  session_start();
    $_SESSION['benutzer'] = $_REQUEST['benutzer'];
    $_SESSION['password'] = $_REQUEST['password'];

// Pr�fe Inhalt von Eingabe  
    if ((strlen($_SESSION['benutzer'])>0)and (strlen($_SESSION['password'])>0))
    {
		header('Location: ../loggedin.php');
    	$html_Output = "<html><head><title>Anmeldung</title></head>";
    	$html_Output .= "<body>";
    	$html_Output .= "Hallo, ".$_SESSION["benutzer"]." die anmeldung war erfolgreich.";
    	$html_Output .= "<a href=../control/abmeldung.php>abmelden</a>";
    	$html_Output .= "</body></html>";
    }
    else
    {
    	$html_Output = "<html><head><title>Anmeldung</title></head>";
    	$html_Output .= "<body>";
    	$html_Output .= "Hallo, die Anmeldung war nicht erfolgreich.";
    	$html_Output .= "</body></html>";    	
    }


	echo $html_Output;
?>




