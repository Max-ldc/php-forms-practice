<?php
// Recherche utilisateur par nom
// http://localhost/search.php?q=Chris

if (!isset($_GET['q'])){
    exit('Recherche incorrecte');
}

require_once 'functions.php';
require_once 'data/users.php';
['q' => $searchedName] = $_GET;

// Recherche les résultats dans $users
$resultsContacts = array_filter($users, fn ($u) => (str_contains($u['name'], $searchedName) || str_contains($u['firstname'], $searchedName)));
$nbResults = count($resultsContacts);
require_once 'layout/header.php';

?>
<a href="search.php?q=<?php echo $searchedName?>" class="m-5">Retour à la recherche</a>
<h1 class="text-center mt-3">Résultat de la recherche</h1>

<!-- Affichage des résultats -->
<section class="container">
    <h2 class="text-center"><?php
        if ($nbResults === 0) {
            echo 'Aucun résultat';
        } else if ($nbResults === 1){
            echo '1 résultat';
        } else {
            echo $nbResults . ' résultats';
        }
    ?></h2>
    <div class="row">
        <?php foreach ($resultsContacts as $resultContact) {?>
        <div class="col-4 col-lg-3 text-center g-4">
            <a class="card mx-auto text-dark h-100" href="user.php?id=<?php echo $resultContact['id']?>" style="text-decoration : none">
                <?php createCard($resultContact)?>
            </a>
        </div>
        <?php }?>
    </div>
</section>

<?php
require_once 'layout/footer.php';