<?php
require_once('initialise.php');
include('header.php');
?>

<main role="main" class="container">
    <?php
    if (!isset($_GET['data'])) {
        echo '<br><p id="search_result">Sorry, there are no films available containing the term ';
        echo $_GET['msg'];
        echo "</p>";
    }
    if (isset($_GET['data'])) {
        echo "<p id='search_result'>The following films are available: </p>";
        $json = urldecode($_GET['data']);
        $data = json_decode($json,true);
        foreach ($data as $row) {
            echo '<a href="displayFilmDetails.php?film_id=' . $row['film_id'] . '" >' . $row['title'] . "</a>";
            echo "<br>";
        }
    }
    ?>
</main>

</body>
</html>