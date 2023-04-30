<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Demo</title>
  </head>
  <body>
    <h1>
      <?php
      $greeting = "Hello";
      $read = true;

      if($read){
        $greeting = "you have read $greeting";
      }
      ?>
        <?php echo $greeting; ?>
      </h1>
  </body>
</html>
