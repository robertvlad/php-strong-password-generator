<?php
    session_start();
?>

    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/style.css">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- TITLE -->
        <title>Password Generator</title>
    </head>

    <body>
        <div class="my-container">
            <div id="pass-generata">
                <div class="wrapper">
                    <div class="d-flex flex-column align-items-center">
                        <h3 class="mb-5">La tua password è: <?php echo $_SESSION['password']; ?></h3>
                        <a href="./index.php">
                            <button class="btn btn-primary">Torna alla pagina principale</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>