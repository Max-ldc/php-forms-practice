<?php

function createCard(array $user): void
{
$hobbies = $user['hobbies'];
?>
<img src="<?php echo $user['profile_pic'] ?>" class="card-img-top" alt="...">
<div class="card-body">
    <h4 class="card-title mb-2"> <?php echo $user['firstname'] . ' ' . $user['name'] ?> </h4>
    <h6 class="card-subtitle mb-4 text-muted"> <?php echo $user['email'] ?> </h6>
    <h5 class="card-subtitle mb-1"> Hobbies : </h5>
    <div class="card-text">
        <ul style = "list-style-type : none" class="list-group">
            <?php foreach ($hobbies as $hobbie){?>
                <li> <?php echo $hobbie ?> </li>
            <?php } ?>
        </ul>
    </div>
</div>

<?php }

