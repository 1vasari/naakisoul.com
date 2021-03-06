<?php

require_once __DIR__ . '/includes/util.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require 'components/head.php'; ?>
    <title>Naaki Soul</title>
  </head>

  <body>
    <section class="section">
      <div class="container content has-text-centered">
        <div class="block mb-6">
          <h1 class="title is-size-1">Naaki Soul</h1>
        </div>

        <div class="block mb-6 has-text-centered">
          <video width="560" autoplay loop muted>
            <source src="./video/naaki_vid.mp4" type="video/mp4">
          </video>
        </div>

        <div class="block has-text-centered mb-6">
          <a href="/home" class="button is-white is-outlined is-large">Enter</a>
        </div>
      </div>
    </section>
  </body>
</html>
