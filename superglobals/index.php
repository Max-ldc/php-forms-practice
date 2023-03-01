<?php
require_once 'data/users.php';
require_once 'functions.php';
require_once 'layout/header.php';
?>

<h2 class="text-center mt-3">Utilisateurs</h2>
<input type="text" class="mx-auto d-block">

<section class="container">
    <div class="row">
        <?php foreach ($users as $user) {?>
        <div class="col-4 col-lg-3 text-center g-4">
            <a class="card mx-auto text-dark h-100" href="user.php?id=<?php echo $user['id']?>" style="text-decoration : none">
                <?php createCard($user)?>
            </a>
        </div>
        <?php }?>
    </div>
</section>

<?php
require_once 'layout/footer.php';