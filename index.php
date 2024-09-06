<?php 
// definisco la funzione per generare una password casuale
function generaPassword($lunghezza) {
    // variabile che contiene i caratteri speciali
    $caratteri = 'abcdefghilmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ0123456789!@#%$';
    // variabile che salva la password generata
    $password = '';

    // da definire il ciclo for all'interno della funzione
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Genera Password</h1>
                <form method="GET" action="index.php">
                    <div class="mb-3">
                        <label for="lunghezza" class="form-label"><strong>Lunghezza della password :</strong></label>
                        <input type="text" class="form-control" name="lunghezza" id="lunghezza">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Genera Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>