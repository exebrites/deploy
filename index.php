<?php
const API_URL = "https://dev.whenisthenextmcufilm.com/api";

//nueva sesion de curl 

$ch = curl_init(API_URL);


// recibir resultado y no mostrar en pantalla

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);


$data = json_decode($result, true);

curl_close($ch);
// var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proxima pelicula de marvel</title>
</head>

<body>
    <header>
        <h1>Proxima pelicula de marvel</h1>
        <p>Yas te amo (a chiquita)</p>
        <p>Lindo no ? va no tanto pero bue</p>
    </header>
    <main>
        <section>

            <img src="<?= $data['poster_url']; ?>" alt="" srcset="">
        </section>
    </main>
</body>

</html>