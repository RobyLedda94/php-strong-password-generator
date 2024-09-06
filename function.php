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

?>