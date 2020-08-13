<?php
session_start();
?>
<?php
$_SESSION["uAdmin"]=="";
session_unset('uAdmin');

header('Location:index');
?>