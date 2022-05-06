<?php
    include 'data/movies.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $film= new Movies('Red Notice','2021','Rawson Marshall Thurber','Rawson Marshall Thurber','Italy','English',['Dwayne Johnson','Ryan Reynolds','Gal Gadot','Ritu Arya']);
        var_dump($film);
        var_dump($film->countCast())
        ?>

</body>
</html>