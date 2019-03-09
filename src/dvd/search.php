<?php
require_once('dbConnection.php');

$search_term = $_POST["search_term"] ?? '1';

$qryFind = "SELECT film_id, title FROM film WHERE title LIKE '%" . $search_term . "%'";

$connection = connectToDb();

$result = mysqli_query($connection, $qryFind);

if (mysqli_num_rows($result) > 0) {
    $data = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $data[] = $row;
        //echo '<a href="displayFilmDetails.php?film_id='. $row['film_id'] . '" >'.$row['title']."</a>";
        //echo "<br>";
    }
    //$param = urlencode(json_encode($data));
    //header("Location: searchResult.php?data={$param}");
    header("Location: searchResult.php?data=" . urlencode( json_encode($data)) );
} else {
    header("Location: searchResult.php");
}
