<?php
session_start();
if (isset($_SESSION["Email"])){
    if ($_SESSION["Role"] == 1)
        require ("AdminHeader.php");
    else
        require ("UserHeader.php");
}
else
    require ('Header.php');
?>

<section id="main">
</section>

<?php require ('Footer.php'); ?>