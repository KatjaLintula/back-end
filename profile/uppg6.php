<article>
    <?php session_start(); ?>
    <form id = "login" action="index.php" method="get">
        Användarnamn: <input class= name type="text" name="username"><br>
        Password: <input class= pass type="password" name="password"><br>
        <input class="button" type="submit" value="Logga in!">
    </form>

    <?php

    $username = test_input($_REQUEST['username']);
    $password = test_input($_REQUEST['password']);
    if (!empty($username) && (!empty($password))) {
        $_SESSION['loggedin'] = $username;
        $loggedin = true;
    } else {
        $loggedin = false;
    }
    ?>
</form>
</article>
<script>   //Gömmer inloggningen från profilsidan om man redan är inloggad. Fungerar inte, vet inte var jag ska lägga scriptet for att det ska fungera.
    let login = '<?php echo $loggedin?>';
    if (login=== true) {
        document.getElementById("login").style.display = "none"
    } else {
        document.getElementById("login").style.display = "block"
    }
</script>  

