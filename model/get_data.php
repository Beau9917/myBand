<?php
session_start();

    $query = "SELECT * FROM articles ORDER BY id DESC LIMIT $limit_starting_number,$results_per_page";

    $result = $mysqli->query($query) or die ('Error querying');