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
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="d-flex justify-content-center pt-5">
        <table class="table w-50 border ">
            <thead>
                <tr class="table-info">
                    <th>#</th>
                    <th>Nome</th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr>
            </thead>

            <?php $counter = 1;
            foreach ($hotels as $hotel) { ?>
                <tbody>
                    <tr>
                        <td class="fw-bold"><?php echo $counter?></td>
                        <td class="fw-bold"><?php echo $hotel['name'] ?></td>
                        <td> <?php echo $hotel['parking'] ?  "sì" : "no" ?></td>
                        <td><?php echo $hotel['vote'] ?></td>
                        <td><?php echo $hotel['distance_to_center'] ?> km</td>
                    </tr>
                </tbody>
            <?php $counter++; } ?>
        </table>
    </div>

</body>

</html>