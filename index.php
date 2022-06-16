<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP </title>
</head>
<body>
    <h1>Hello World</h1>
    <?php
    $author = 'Sazid!';
    ?>

    <h1>Hey, 
    <?php echo $author;
    ?>
    </h1>

    <br>
    <h3>
    <?php
    //string basics
    $str = "Hello World From MIST";


    //count the length of any string
    echo strlen($str) . '<br>';

    //count how any words are there in a sentence
    echo str_word_count($str) . '<br>';

    ?>
    </h3>

    <tb>
        
    <?php
    //arrays
    
    $students = [
        'Sazid' => 21,
        'Rima' => 22,
        'Mehedi' => 23
        ];

        foreach($students as $name=>$roll)
        {
            echo "Name : " . $name . ', ' . 'Roll : ' . $roll . '<br>';
        }

    ?>
    </tb>


    
</body>
</html>