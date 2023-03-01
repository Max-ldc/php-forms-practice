<?php
// Fiche utilisateur à partir d'un paramètre GET

// http://localhost/superglobals/user.php?id=1
require_once 'functions.php';
require_once 'data/users.php';
require_once 'layout/header.php';

$searchedId = intval($_GET['id']);
// if ($searchedId === 0) {
//     exit('Entrez un identifiant correct');
// }

$foundUserKey = array_search($searchedId, array_column($users, 'id'));
if ($foundUserKey === false) {
    exit('Utilisateur non trouvé');
}
$foundUser = $users[$foundUserKey];
?>

<div class="card col-6 col-md-4 col-lg-2 g-2 text-center mx-auto mt-3" style="width: 18rem;">
    <?php createCard($foundUser); ?>
</div>

<?php require_once 'layout/footer.php';