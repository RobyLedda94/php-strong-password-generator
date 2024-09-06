<?php 

// includo il file function
include __DIR__ . '/function.php';

// variabile di controllo ed assegnazzione della lunghezza 
$lunghezza = isset($_GET['lunghezza']) && is_numeric($_GET['lunghezza']) && $_GET['lunghezza'] > 0 ? intval($_GET['lunghezza']) : 0;
$result = $lunghezza > 0 ? generaPassword($lunghezza) : '';

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
                <!-- mostro il risultato a video -->
                <?php if ($result): ?>
                    <div class="mt-3">
                        <h2>La tua password è:</h2>
                        <p class="bg-light p-3"><?php echo $result; ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>