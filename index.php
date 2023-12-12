<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php hotel</title>
</head>

<body>

    <?php foreach ($hotels as $hotel) { ?>
        <div>
            <h1> <?php echo $hotel['name'] ?></h1>
            <h4><?php echo $hotel['description'] ?>:</h4>
            <p><span>parking</span> : <?php echo $hotel['parking'] ?  "sì" : "no" ?></p>
            <p><span>voto: </span> <?php echo $hotel['vote'] ?></p>
            <p><span>distanza dal centro:</span> <?php echo $hotel['distance_to_center'] ?></p>
        </div>
    <?php } ?>
</body>

</html>