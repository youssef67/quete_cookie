<?php

session_start();

require 'inc/head.php';

?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="text-center">
      <?php if (empty($_COOKIE["article"])) {
          echo 'votre panier est vide';
      } else {
          echo 'Vous avez décidé d\'acheter le ' . $_COOKIE["article"];
      }
      ?>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
