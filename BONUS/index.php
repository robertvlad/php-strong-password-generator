<?php

    session_start();

    // LINK ALLE FUNCTIONS
    include __DIR__ .'/functions/functions.php';

    $lunghezza_password = $_POST['password'] ?? '';

    if($lunghezza_password != '') {
        $pass_generata = passwordRandom($lunghezza_password);
        $_SESSION['password'] = $pass_generata;
        header('Location: ./generated_password.php');
    }

    // CHIAMATA FUNZIONE
    passwordRandom($lunghezza_password);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- TITLE -->
        <title>Password Generator</title>

        <!-- STYLE -->
        <link rel="stylesheet" href="./style/style.css">
    </head>
    

    <body>
        <header>
            <nav class="d-flex align-items-center">
                <div class="container-fluid">
                    <div class="d-flex flex-column align-items-center">
                        <h1 class="mb-0">Password Generator</h1>
                        <h5>Genera una password sicura</h5>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="wrapper">
                    <div class="form-container">
                        <form method="POST">
                            <div class="mb-3 d-flex">
                                <div>
                                    <p>Lunghezza Password:</p>
                                </div>
                                <div class="input-container">
                                    <input type="number" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="mb-3 d-flex">
                                <div>
                                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                                </div>
                                <div class="check-container">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Si
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            No
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Lettere
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Numeri
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Simboli
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Invia</button>
                            <button type="reset" class="btn btn-secondary">Annulla</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>