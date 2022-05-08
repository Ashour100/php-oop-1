<?php
    include 'data/movies.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Movie details</title>
</head>
<style>
    body{
        font-family: 'Open Sans', sans-serif;
    }
    h4{
        margin-left: 3rem
    }
    img{
        position: absolute;
        right: 2rem;
        top:2rem;
        width:20rem;
    }
</style>
<body>
    <?php
        $film= new Movies('Red Notice','2021','Rawson Marshall Thurber','Rawson Marshall Thurber','Italy','English','https://m.media-amazon.com/images/M/MV5BZmRjODgyMzEtMzIxYS00OWY2LTk4YjUtMGMzZjMzMTZiN2Q0XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg',['Dwayne Johnson','Ryan Reynolds','Gal Gadot','Ritu Arya']);
        $countCast=$film->countCast();?>
        <h1>The movie</h1>
        <h4>Name: <?= $film->name ?></h4>
        <h4>Year: <?= $film->year ?></h4>
        <h4>Director: <?= $film->director ?></h4>
        <h4>Writer: <?= $film->writer ?></h4>
        <h4>country: <?= $film->country ?></h4>
        <h4>language: <?= $film->language ?></h4>
        <h4>Cast:
        <?php if($countCast>1){
            foreach($film->cast as $index=> $member){
                echo $member;
                if(!($index==$countCast-1)){
                    echo ', ';
                }else
                    echo '.';
            }
        }
        else
            echo $film->cast;
        ?></h4>
        <img src="<?php echo $film->poster?>" alt="">
</body>
</html>