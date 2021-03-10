<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="5; url=index.html">
    <title>CompraVisual</title>
    <link rel = "icon" href ="imagenes/logo.png" type = "image/x-icon" /> 
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
        />
</head>
<body style="background-image: url('imagenes/fondos/adios.jpg')">
    <div class="row justify-content-center" style="margin-top: 190px">
        <div
            class="bg-dark box-shadow mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden"
            style="width: 40rem; height: 20rem; border-radius: 22px 22px 22px 22px"
        >
            <div class="my-3 py-3">
            <h2 class="display-5" style="color: white">Cuenta eliminada con éxito</h2>
            <br />
            <p style="color: white">Se le redirigirá a la página principal en:</p>
            <h1 id="contador" style="color: white"></h1>
            </div>
        </div>
    </div>

    <?php 
        require_once('server.php'); 
        $user = $_SESSION['username'];
        $result = $db->query("DELETE FROM users WHERE username ='$user'");
    ?>

    <script src="script.js"></script>
</body>
</html>
