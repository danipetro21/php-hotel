<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOTEL</title>
</head>

<body>


  <?php

  //data 
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

  //get


  ?>


  <h1>LISTA DEGLI HOTEL</h1>

  <div class="form">

    <form>


      <input type="checkbox" id="park" name="park">
      <label for="park">Parceggio</label>
      <input type="submit" value="SEARCH">
      <br>
      <br>

    </form>
  
  </div>

  <div class="box-hotel">
    <?php
  
    foreach ($hotels as $hotel) {
      $name = $hotel["name"];
      $description = $hotel["description"];
      $vote = $hotel["vote"];
      $distance_to_center = $hotel["distance_to_center"];

      
      echo $name . ":" . "<br>";
      echo $description . " | " . $vote . " | " . $distance_to_center . "<br><br><br>";
    }

    ?>
  </div>
  
    <?php
    $parks = [];
    if(isset($_GET['park'])){
      echo "<h1>RISULTATI RICERCA PER PARCHEGGIO</h1>";
      foreach ($hotels as $hotelPark){
        $park = $hotelPark["parking"];
        $name = $hotelPark["name"];
        if ($park === true){
          echo $name . " | ";
        }
        
      }
      
    }
  

    ?>

  <div>

    
    
  </div>
  



</body>




</html>