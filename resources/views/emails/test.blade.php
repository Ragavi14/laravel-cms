<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <h2>Create New Password</h2>
    
    <label>Please click on below link to create new password</label>
    <?php
    $vars = $data;
    $qs = http_build_query($vars);
    $url = 'http://127.0.0.1:8000/set-password?' . $qs;
     ?>
    <a href='<?php echo $url ?>'>click me</a>
  </body>
</html> 
