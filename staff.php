<?php

use Utility\Functions;

require './setup.php';

const TITLE = 'Staff';

$levels = [['title' => 'Staff']];

$navbar = null;
Functions::extend('inner-header');

?>

<main id="main" class="my-5">
  <div class="container my-3">
    <div class="row justify-content-center">
      <?php
      require 'ops/staff.php';
      ?>
    </div>
  </div>
</main>

<?php

Functions::extend('footer');
