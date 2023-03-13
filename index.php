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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotels</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <table class="table">
      <?php foreach ($hotels as $hotel) : ?>
     <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">description </th>
        <th scope="col">parking</th>
        <th scope="col">vote</th>
        <th scope="col">distance_to_center </th>
      </tr>
     </thead>
     <tbody>
       <tr>
        <th scope="row"><?= $hotel["name"] ?></th>
        <td scope="col"> <?= $hotel["description"] ?></td>
        <td scope="col"> <?= $hotel["parking"] ?></td>
        <td scope="col"> <?= $hotel["vote"] ?></td>
        <td scope="col"> <?= $hotel["distance_to_center"] ?></td>
      </tr>
     </tbody>

  
  <?php endforeach ?>
  
</table>
    </div>
</body>
</html>