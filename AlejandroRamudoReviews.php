<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (4, "2021-09-23", "Jordi Egea", "Buena pelicula pero no perfecta", 4),
    (4, "2021-09-20", "Carlos Arrebola", "Me quede dormido aburrida", 2),
    (4, "2021-09-21", "Marcos Betis", "Pelicula perfecta buen ambiente e increibles animaciones", 5),
    (5, "2021-11-10", "Pablo Motos", "Pelicula favorita sin duda", 5),
    (5, "2021-11-08", "Mario Casas", "Estuvo bien pero tampoco nada del otro mundo", 3),
	(5, "2021-11-08", "Oscar Top", "Me dormi pesima", 1),
	(6, "2021-08-19", "Benjamin", "Ni fu ni fa me esperaba mas", 2),
	(6, "2021-08-20", "Antonio Onio", "Espectacular, no se porque es criticada", 4),
	(6, "2021-08-22", "Enrique Nashe", "La peor peli que he visto en mi vida", 1)
ENDSQL;
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';
?>
