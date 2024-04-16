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

    // var_dump($hotels);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  

    <div class="container my-5 ">

      <h1>PHP Hotel</h1>

      <div class="row">

        <?php foreach($hotels as $key => $hotel): ?>
        <div class="card col mx-2 " style="width: 18rem;">
          
          <div class="card-body">
  
            <h5 class="card-title">Nome hotel: <?php echo $hotel['name'] ?></h5>
            <p class="card-text"><?php echo $hotel['description'] ?></p>
            <p class="card-text">Parcheggio disponibile: <?php echo $hotel['parking'] ? 'si': 'no' ?></p>
            <p class="card-text">Voto: <?php echo $hotel['vote'] ?></p>
            <p class="card-text">Distanza dal centro: <?php echo $hotel['distance_to_center'] ?></p>
            
          
          </div>
        </div>
        <?php endforeach ?>

      </div>

    </div>
</body>
</html>