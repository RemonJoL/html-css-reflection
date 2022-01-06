<?php

echo '<div class="card-wrapper col2 col3-lg col-spacer-sm">';
  echo '<div class="latest-header">';
    echo '<a href="#"><img class="latest-header-img" src="'.$result[$i]["header_img"].'" alt=""></a>';
    echo '<span class="header-tag '.$result[$i]["colour"].'"><a href="#">'.$result[$i]["category"].'</a></span>';
  echo '</div>';

  echo '<div class="card latest-content">';
    echo '<h3 class="'.$result[$i]["colour"].'-txt"><a href="#">'.$result[$i]["title"].'</a></h3>';
    echo '<p>'.$result[$i]["message"].'</p>';
    echo '<a class="btn '.$result[$i]["colour"].' btn-letterspace" href="#">READ MORE</a>';

    echo '<div class="user">';
      echo '<div class="user-grid">';
        echo '<div class="user-avatar">';
          echo '<img class="avatar-img" src="'.$result[$i]["user_avatar"].'" alt="'.$result[$i]["user_name"].'">';
        echo '</div>';
        echo '<div class="user-details">';
          echo '<strong>Posted by '.$result[$i]["user_name"].'</strong>';
          echo '<br>';
          echo $result[$i]["date"];
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</div>';
