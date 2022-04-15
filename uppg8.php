<br>Besöksräknare<br> 

<?php
$myfile = fopen("../besok.txt", "r") or die("Unable to open file!");
print(fread($myfile,filesize("../besok.txt")));
fclose($myfile);

if(!empty($username)){
    $myfile = fopen("../besok.txt","a+") or die("Unable to open file");
    fwrite($myfile, $username. " var här ". date('d.m.Y'). "<br>" );
    fclose($myfile);
}
?> 