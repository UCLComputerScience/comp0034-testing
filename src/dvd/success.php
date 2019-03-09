<?php
require_once('initialise.php');
include('header.php');
?>

<main role="main" class="container">

    <br>
    <?php
    if(isset($_GET['msg'])){
        echo "<p id='new_account'>".$_GET['msg']."</p>";
    }
    ?>
    <p id="logged_in">You are now logged in <?php echo $_SESSION['firstName'] ?? ''?></p>
    </form>
</main>

</body>
</html>