<?php
if(!isset($_SESSION['usser'])) {
    header("location: ./");
}

include_once "layouts/header.php"
?>

<!-- Contenido principal -->
<div class="container">
    <h1>Contenido Principal</h1>
</div>

<!-- Footer -->
<?php include_once "layouts/footer.php"; ?>


