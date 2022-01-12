<div class="card-wrapper col2 col3-lg col-spacer-sm">
  <div class="latest-header">
    <a href="#"><img class="latest-header-img" src="<?php echo $result[$i]["header_img"]; ?>" alt=""></a>
    <span class="header-tag <?php echo $result[$i]["colour"]; ?>"><a href="#"><?php echo $result[$i]["category"]; ?></a></span>
  </div>

  <div class="card latest-content">
    <h3 class="<?php echo $result[$i]["colour"]; ?>-txt"><a href="#"><?php echo $result[$i]["title"]; ?></a></h3>
    <p><?php echo $result[$i]["message"]; ?></p>
    <a class="btn <?php echo $result[$i]["colour"]; ?> btn-letterspace" href="#">READ MORE</a>

    <div class="user">
      <div class="user-grid">
        <div class="user-avatar">
          <img class="avatar-img" src="<?php echo $result[$i]["user_avatar"]; ?>" alt="<?php echo $result[$i]["user_name"]; ?>">
        </div>
        <div class="user-details">
          <strong>Posted by <?php echo $result[$i]["user_name"]; ?></strong>
          <br>
          <?php
            $date = $result[$i]["date"];
            $dateNew = new DateTime($date);
            echo $dateNew->format("jS F Y");
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
