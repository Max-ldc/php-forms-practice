<?php
require_once 'layout/header.php';
?>

<h1 class="text-center my-3">Recherche de contact :</h1>

<div class="row">
    <form class="col-auto mx-auto" method="get" action="results.php">
        <input type="text" name="q" id="search" value="<?php echo $_GET['q'] ?? ''; ?>">
        <input type="submit" value="Rechercher">
    </form>
</div>

<?php
require_once 'layout/footer.php';