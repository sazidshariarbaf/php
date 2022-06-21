<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
        $author = 'SAZID';
    ?>
    <h1>Hi
    <?php echo $author; ?>    
    </h1>

    <?php 
      //string basics
      $str = "hello world from MIST";
      echo strlen($str) . '<br/>';
      echo str_word_count($str) . '<br/>';

      //arrays
      $students = [
        'Sazid' => 22,
        'Mehedi' => 23,
        'Rima' => 24
      ];
      foreach($students as $name => $roll)
      {
        echo "Name: ". $name. ','. ' Roll: '. $roll. '<br/>';
      }

      ?>
      <?php

      date_default_timezone_set('America/Los_Angeles');
      echo date('Y-M-D h:m:sa');

      ?>

      <br>
      <?php include 'footer.php' ?>

    
</body>
</html> 