<?php

    // LINK ALLE FUNCTIONS
    include __DIR__ .'./functions/functions.php';

    $lunghezza_password = $_POST['password'] ?? '';

    // AVVISO NEL CASO L'UTENTE NON ABBIA SELEZIONATO LA LUNGHEZZA DELLA PASSWORD
    if($lunghezza_password === '') {
        $pass_generata = 'Devi inserire una lunghezza per la password!';
    } else {
        $pass_generata = passwordRandom($lunghezza_password);
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
    </head>

    <body>
        <div class="container">

            <!-- FORM CON LE DIVERSE OPZIONI -->
            <form action="index.php" method="POST">
                <div class="mb-3 d-flex">
                    <div>
                        <p>Lunghezza Password:</p>
                    </div>
                    <div>
                        <input type="number" class="form-control" name="password">
                    </div>
                </div>
                <div class="mb-3 d-flex">
                    <div>
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                    </div>
                <div>
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

        <!-- TASTI START/STOP -->
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-secondary">Annulla</button>

        <!-- PASSWORD GENERATA -->
        </form>
            <div>
                <h3>La tua password è: <?php echo $pass_generata; ?></h3>
            </div>
        </div>
    </body>
</html>