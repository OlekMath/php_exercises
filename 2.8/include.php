<?php
  $title = 'includes';

  include('./../inc/header.php');
  require_once('./../inc/functions.php');

    $guitars = [
        ['name' => 'Vela', 'manufacturer' => 'PRS'],
        ['name' => 'Explorer', 'manufacturer' => 'Gibson'],
        ['name' => 'Strat', 'manufacturer' => 'Fender']
    ];

    // $guitar_names = array_column($guitars, 'manufacturer');

    $guitar_names = pluck($guitars, 'name');


?>



    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">My Favorite Guitars</h1>
        </div>
      </div>
      <div class="row">

      <?php 
       output($guitar_names);
      ?>

      </div>
    </div>

    <?php include('./../inc/footer.php'); ?>