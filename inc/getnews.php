<?php

// $newsQuery = $db->query('SELECT *  FROM remonjan_php_reflection.netmatters_news ORDER BY postID DESC LIMIT 3'); //Live Environment
$newsQuery = $db->query('SELECT *  FROM netmatters.netmatters_news ORDER BY postID DESC LIMIT 3'); //Local Environment
$result = array();
$i = 0;

// While a row of data exists, put that row in $row as an associative array
while ($row = $newsQuery->fetch(PDO::FETCH_ASSOC)){
  $result[] = $row;
}
// Loops through the array and places the values from the array into the news card include as instructed on the include
foreach ($result as $card) {
  include 'news-card.php';
  $i++;
}
