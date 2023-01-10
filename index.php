<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
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

      <!-- filtraggio per parcheggio -->
      <select name="park" id="park">
        <option value="1">Parcheggio presente</option>
        <option value="0">Parcheggio non presente</option>
      </select>

      <!-- select per il voto -->
      <label for="stelle">Stella/e</label>
      <select name="stelle" id="stelle">
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
      </select>

      <input type="submit" value="SEARCH">
      <br>
      <br>

    </form>

  </div>

  <div class="box-hotel">

    <table>
      <tr>
        <th>NOME</th>
        <th>DISTANZA</th>
        <th>VOTO</th>
        <th>DESCRIZIONE</th>
      </tr>
      <?php
      foreach ($hotels as $hotel) {
        $name = $hotel["name"];
        $description = $hotel["description"];
        $vote = $hotel["vote"];
        $distance_to_center = $hotel["distance_to_center"];
        $park = $hotel["parking"];

        echo "<tr>" . "<td>" . $name . "</td>" . "<td>" . $distance_to_center ." KM" . "</td>" . "<td>" . $vote . "</td>" . "<td>" . $description . "</td>" . "</tr>";
      }
      ?>

    </table>

    <table>
      <tr>
        <th>NOME</th>
      </tr>
      <?php
      echo "<h1>RISULTATI RICERCA: </h1>";
      foreach ($hotels as $hotelPark) {
        $park = $hotelPark["parking"];
        $vote = $hotelPark["vote"];
        $name = $hotelPark["name"];
        if ($park == $_GET['park'] && $vote >= $_GET['stelle']) {
          echo "<tr>" . "<td>" . $name . "</td>" . "</tr>";
        }
      }
      ?>
    </table>
  </div>
</body>




</html>