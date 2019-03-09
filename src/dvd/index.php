<?php
require_once('initialise.php');
include('header.php');
?>

<main role="main" class="container">

    <br>
    <form class="form" action="login.php" method="post" name="login_form" id="login_form">
        <legend>Please enter your details</legend>
        <div class="form-group">
            <label for="firstname">First name: </label>
            <input type="text" class="form-control" name="first_name" id="firstname">
            <label for="familyname">Family name: </label>
            <input type="text" class="form-control" name="family_name" id="familyname">
            <label for="email">Email address: </label>
            <input type="email" class="form-control" name="email_address" id="email">
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</main>

</body>
</html>