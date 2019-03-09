<?php
require_once('initialise.php');
include('header.php');
?>

<main role="main" class="container">
    <?php
    requireLogIn();
    getAccountDetails();
    ?>
</main>

</body>
</html>