<?php

$newsQuery = $db->query('SELECT *  FROM netmatters.netmatters_news ORDER BY postID DESC LIMIT 3');
$result = array();
$i = 0;
while($i < 3) {
  $result[$i] = $newsQuery->fetch(PDO::FETCH_ASSOC);
  // var_dump($result);
  include 'news-card.php';
  $i++;
}
