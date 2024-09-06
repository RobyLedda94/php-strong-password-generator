<?php 
// definisco la funzione per generare una password casuale
function generaPassword($lunghezza) {
    // variabile che contiene i caratteri speciali
    $caratteri = 'abcdefghilmnopqrstuvwxyzABCDEFGHILMNOPQRSTUVWXYZ0123456789!@#%$';
    // variabile che salva la password generata
    $password = '';

    // ciclo per generare la password
    for ($i = 0; $i < $lunghezza; $i++) {
        $carattere = $caratteri[rand(0, strlen($caratteri) -1 )];
        $password .= $carattere;
    }

    return $password;
    
}

// variabile di controllo ed assegnazzione della lunghezza 
$lunghezza = isset($_GET['lunghezza']) && is_numeric($_GET['lunghezza']) && $_GET['lunghezza'] > 0 ? intval($_GET['lunghezza']) : 10;
$result = generaPassword($lunghezza);

// debug della password generata
var_dump($result);

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
                        <input type="number" class="form-control" name="lunghezza" id="lunghezza" value="<?php echo $_GET['lunghezza']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Genera Password</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>