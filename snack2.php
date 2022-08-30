<?php 

/*
SNACK 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un 
punto e una chiocciola e che age sia un numero. Se tutto è ok 
stampare “Accesso riuscito”, altrimenti “Accesso negato”;
*/

$name= $_GET['name'] ?? '';
$age= $_GET['age'] ?? '';
$email= $_GET['email'] ?? '';

if ( $name < 3 ) {
    echo 'Il nome deve contenere più di tre caratteri';
} else {
    if (!is_numeric($age) == false) {
    echo "l'età deve essere inserito tramite cifre";
 } else (!strpost($email, '@') == false ) {
    echo "l'email deve contenere la @ ";
} };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
    <form action="" method="GET">
        <div>
            <label for="name">Nome</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="age">Cognome</label>
            <input type="text" id="age" name="age">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <button type="submit">Accedi</button>
    </form>
</body>
</html>