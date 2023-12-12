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

$vote_select = isset($_GET['vote']) ? (int)$_GET['vote'] : null;
$park_select = isset($_GET['park']) ? $_GET['park'] : null;
$filteredHotels = empty($vote_select) && empty($park_select) ? $hotels : [];

if (!empty($vote_select) && !empty($park_select)) {

    $filteredHotels = array_filter($hotels, function ($hotel) use ($vote_select, $park_select) {
        return $vote_select <= $hotel['vote'] && filter_var($park_select, FILTER_VALIDATE_BOOLEAN) === $hotel['parking'];
    });
} elseif (!empty($vote_select) && empty($park_select)) {
    $filteredHotels = array_filter($hotels, function ($hotel) use ($vote_select) {
        return $vote_select <= $hotel['vote'];
    });
} elseif (empty($vote_select) && !empty($park_select)) {
    $filteredHotels = array_filter($hotels, function ($hotel) use ($park_select) {
        return filter_var($park_select, FILTER_VALIDATE_BOOLEAN) === $hotel['parking'];
    });
}



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

    <form action="index.php" method="GET">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <select class="form-select w-25 mt-5 mb-3" name="vote" id="vote">
                <option value="" disabled selected>voto da 1 a 5</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <select class="form-select w-25" name="park" id="park">
                <option value="" disabled selected>parcheggio</option>
                <option value="true">con parcheggio</option>
                <option value="false">senza parcheggio</option>
            </select>
        </div>
        <div class="d-flex flex-column align-items-center">
            <button type="submit" class="btn btn-primary mt-3">Filtra</button>
        </div>
    </form>

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

            <tbody>
                <?php $counter = 1;
                foreach ($filteredHotels as $hotel) { ?>
                    <tr>
                        <td class="fw-bold"><?php echo $counter ?></td>
                        <td class="fw-bold"><?php echo $hotel['name'] ?></td>
                        <td> <?php echo $hotel['parking'] ?  "sì" : "no" ?></td>
                        <td><?php echo $hotel['vote'] ?></td>
                        <td><?php echo $hotel['distance_to_center'] ?> km</td>
                    </tr>
                <?php $counter++;
                } ?>
            </tbody>
        </table>
    </div>

</body>

</html>