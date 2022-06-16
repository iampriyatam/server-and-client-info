<?php
  include 'server-info.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Server and Client Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Server Information</h1>
      <?php if($server_info): ?>
        <ul class='list-group'>
          <?php foreach ($server_info as $key => $value): ?>
            <li class="list-group-item">
              <b><?php echo $key;?>: </b><?php echo $value;?>
            </li>
          <?php endforeach; ?>
        </ul>
        
      <?php endif; ?>
      <h1>Client Information</h1>
      <?php if($client_info): ?>
        <ul class='list-group'>
          <?php foreach ($client_info as $key => $value): ?>
            <li class="list-group-item">
              <b><?php echo $key;?>: </b><?php echo $value;?>
            </li>
          <?php endforeach; ?>
        </ul>
        
      <?php endif; ?>
    </div>

  </body>
</html>
