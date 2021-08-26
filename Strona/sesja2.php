<?php
     session_start(); // Startuje mechanizm sesji
     
     session_destroy(); // Usuwa sesje

     echo "zostałeś wylogowany<br>";
?>

<a href="sesja1.php"><br>wróć</a>