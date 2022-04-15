<article>
    <h1>Registrera dig!</h1>
    <form action="index.php" method="get">
        Användarnamn: <input id= name type="text" name="username"><br>
        Email: <input id= email type="text" name="email"><br>
        <input class="button" type="submit" value="Logga in!">
    </form>

    <?php
    $username = test_input($_REQUEST['username']);
    $email = test_input($_REQUEST['email']);
            
    if (!empty($username) && (!empty($email))) {
        print("<br>Ditt användarnamn är: ".$username);
        $passarray = array("a","c","m","1","2","6","7");
        $randompass = array_rand($passarray,4);
        print("Ditt lösenord: ". $passarray[$randompass[0]].$passarray[$randompass[1]].$passarray[$randompass[2]].$passarray[$randompass[3]]);
    };
    ?>
</article>