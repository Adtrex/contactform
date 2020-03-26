<?php
$name=$_POST["name"]

?>
<?php
$file=fopen("user.txt", "a");
fwrite($file, $name);
fclose($file);
?>