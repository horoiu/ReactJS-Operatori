<?php
  $cnx = mysqli_connect("localhost","root","","operatori");
  // Se verifica dacă s-a creat conexiunea
  if (mysqli_connect_errno()) {
     die("Conectare la MySQL nereusita: " . mysqli_connect_error());
  };
  // Impun setul de caractere utf8
  mysqli_set_charset($cnx,"utf8");
  //  Permit accesarea scriptului din alt domeniu (adica din localhost:3000)
  header("Access-Control-Allow-Origin: *");
?>