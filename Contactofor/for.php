<html>
    <body>
   
<?php
	if(isset($_POST["enviar"]) && !empty($_post["enviar"])) {
		$nombre = $_post["nombre"];
		echo "<b>" .$nombre . "</b>";
	}
?>

    </body>
</html>
