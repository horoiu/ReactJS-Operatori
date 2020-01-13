<?php 
    require 'conect.php'; 

    $articole = [];
    $cda = "SELECT * FROM listaoper ORDER BY locatie ASC";
    if ($rez = mysqli_query($cnx,$cda)) {
        // Se preiau liniile pe rand
        while ($linie = mysqli_fetch_assoc($rez)) {
            $articole[] = $linie;
        } 
        mysqli_free_result($rez);
    }

    /* Inchid conexiunea cu serverul MySQL */
    mysqli_close($cnx);
    echo json_encode($articole);
?>