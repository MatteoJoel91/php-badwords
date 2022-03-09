<?php

    $paragrafoValido = '<p>Questo paragrafo è una prova didattica per provare php ed alcune delle sue funzionalità.</p>';
    echo $paragrafoValido;
    echo '<span>Lunghezza del paragrafo: </span>';
    echo strlen($paragrafoValido);
    echo '<br><br><br>';

    echo 'La parola censurata è: ';
    $parolaCensurata = $_GET['parola'];
    echo $parolaCensurata;
    $paragrafoCensura = str_replace($parolaCensurata, '***', $paragrafoValido);
    echo $paragrafoCensura;
    echo '<span>Lunghezza del paragrafo: </span>';
    echo strlen($paragrafoCensura);

?>