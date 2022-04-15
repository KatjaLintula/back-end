<?php

session_start();

if (isset($_SESSION['loggedin'])) {
    print("<h3>Välkommen ". $_SESSION['loggedin']."</h3>");
    include "uppg7.php";
} else {
    print("<p>Du måste logga in för att komma till din profil </p>");
}
?>