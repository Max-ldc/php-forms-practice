<?php
//
require_once 'data/products.php';
// LAYOUT - HEADER
$title = "Contactez nous";
require_once 'layout/header.php';

var_dump($_POST);
?>
<!-- CONTENT -->


<form action="" class="d-flex flex-column w-25 mx-auto mt-3" method="post">
  <label for="name">Name</label>
  <input type="text" name="name" id="name" class="mb-2">
  <label for="email">E-mail</label>
  <input type="text" name="email" id="email" class="mb-2">
  <label for="productList">Objet de la demande</label>
  <select name="productList" id="productList" class="mb-2">
    <option value="">-</option>
    <option value="prodQuest">Question sur un de nos produits</option>
    <option value="sav">Problème avec un produit acheté</option>
    <option value="delivQuest">Question sur la livraison</option>
    <option value="delivPb">Problème avec la livraison d'une commande</option>
    <option value="autre">Autre demande</option>
  </select>
  <div class="checkbox d-flex mb-2">
    <input type="checkbox" name="newsletter" id="checkbox">
    <label for="checkbox" class="mx-2">Je souhaite m'abonner à la newsletter</label>
  </div>
  <label for="message">Message</label>
  <textarea name="message" id="message" cols="" rows="10" placeholder="Votre message..." class="mb-2"></textarea>
  <button type="submit" name="" class="btn btn-info">Enregistrer</button>
</form>
<!-- CONTENT -->

<?php
// LAYOUT - FOOTER
require_once 'layout/footer.php';