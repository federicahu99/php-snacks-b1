<?php 

/* SNACK 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$games = [
    [ 
        'city' => 'Los Angeles',
        'home' => 'Lakers',
        'guest' => 'Knights',
        'home_point' => '195',
        'guest_point' => '188',
    ];
    [ 
        'city' => 'San Francisco',
        'home' => 'Warriors',
        'guest' => 'Celtics',
        'home_point' => '211',
        'guest_point' => '201',
    ];
    [ 
        'city' => 'Washington',
        'home' => 'Wizards',
        'guest' => 'Nuggets',
        'home_point' => '124',
        'guest_point' => '147',
    ];
    [ 
        'city' => 'Miami',
        'home' => 'Bulls',
        'guest' => 'Jazzs',
        'home_point' => '197',
        'guest_point' => '214',
    ];
    ];

var_dump($games);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <h1>GAMES 2022:</h1>
    <ul>
        <?php for( $i = 0 ; $i < count($games) -1; $i++) : ?>
        <li>
        <h5><?php $games['city'] ?></h5>
        </li>
        <?php endfor; ?>
    </ul>
</body>
</html>