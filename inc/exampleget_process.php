<?php
if(isset($_GET["name"]) || isset($_GET["age"])){
	echo "Your name is ".$_GET['name']." and you are ".$_GET['age']." years old.";
}
exit();
?>
