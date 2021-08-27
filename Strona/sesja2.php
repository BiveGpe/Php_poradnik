<?php
     session_start(); // Startuje mechanizm sesji
     
     session_destroy(); // Usuwa sesje

     echo "Sesja została zakończona<br>";
?>

<a href="sesja.php"><br>wróć</a>