<?php
session_start();
// AANTAL ITEMS PER PAGE
$results_per_page = 3;

//AANTAL PAGES BEREKENEN
$query = "SELECT * FROM articles ORDER BY id DESC ";
$result = $mysqli->query($query) or die ('Error hond');
$number_of_results = mysqli_num_rows($result);
$number_of_pages = ceil($number_of_results / $results_per_page);

// HUIDIGE PAGINA CHECKEN
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}


// EERSTE ITEM VAN QUERY BEPALEN
$limit_starting_number = ($page - 1) * $results_per_page;