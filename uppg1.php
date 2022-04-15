<?php
    $clientip = $_SERVER['REMOTE_ADDR'];
    print("<b>Din ip address:</b> ".$clientip);
    $server = $_SERVER['SERVER_NAME'];
    $hostip= $_SERVER['SERVER_ADDR'];
    print("<br><b>Servernamn:</b> ". $server. " och <b>ip adress</b>: ". $hostip);
    $apache = $_SERVER['SERVER_SOFTWARE'];
    print("<br><b>Apache:</b> ". $apache);
?>