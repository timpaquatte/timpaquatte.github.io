<?php
$login2=htmlentities($_POST["login"]);
$pass2=$_POST["pass2"];
$dec=$_POST["dec"];


if (isset($dec) && $dec!="") {
	$pass2="";
	$login2="";
	SetCookie("galerie");
}


if (isset($login2) && !empty($login2)) {	
	$formatMysql="ymd";
	$dateMysql=date($formatMysql);
	if (isset($pass2) && !empty($pass2))
	    SetCookie("galerie", $login2.":".base64_encode($pass2));
}


if (isset($dec) && $dec!="") {
	echo "<center><font color=red><h2>Au revoir</h2><br><br></font><center>";
	echo '<script language="javascript" type="text/javascript">
		window.location.replace("");
		</script>';
} else if (isset($login2) && !empty($login2)) {	
	if (base64_encode($pass2) == "YXplcnR5NjU0JiY=") {
		echo 'EXPECTED';
	} else {
		echo 'STRANGE';
	}
}
echo "</form></TD></TR></table>";
?>
