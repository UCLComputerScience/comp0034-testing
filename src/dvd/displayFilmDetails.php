<?php
require_once('dbConnection.php');

$film_id = $_GET["film_id"] ?? '1';

$qryFind = "SELECT * FROM film WHERE film_id LIKE " . $film_id;

$connection = connectToDb();

$result = mysqli_query($connection, $qryFind);

$row = mysqli_fetch_assoc($result);
/*generates a page with the results, header.php is just the HTML head section I include on all pages
 for this website
*/

include "header.php";
echo "<body><div class='container-fluid'>";
echo "<h3>" . $row['title'] . "</h3>";
echo "<p>Description: " . $row['description'] . "</p>";
echo "<p>Release year: " . $row['release_year'] . "</p>";
echo "<p>Rental duration: " . $row['rental_duration'] . "</p>";
echo "<p>Rental rate: " . $row['rental_rate'] . "</p>";
echo "<p>Length: " . $row['length'] . "</p>";
echo "<p>Rating: " . $row['rating'] . "</p>";
echo "<p>Special features: " . $row['special_features'] . "</p>";
echo "</div></body>";