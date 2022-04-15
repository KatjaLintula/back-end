<form action= "index.php" method="get">
    Ditt användarnanmn: <input type="text" name="usern"><br>
    Skriv en kommentar: <textarea id="comment" name="comment" placeholder="Skriv här!"></textarea>
    <input type="submit" value="Kommentera">
</form>

<?php
$myfile = fopen("blogg.txt","r") or die("Unable to open file");
print( fread($myfile,filesize(("blogg.txt"))) );
fclose($myfile);

$comment = $_REQUEST['comment'];
$user = $_REQUEST['usern'];
if(!empty($comment)&&(!empty($user))){
    $myfile = fopen("blogg.txt","a+") or die("Unable to open file");
    fwrite($myfile, "<br><b>Användarnamn:</b> ". $user. "<br>". "<b>Datum:</b> ". date("d.m.Y"). "<br>". "<b>Kommentar:</b>". $comment. "<br>");
    fclose($myfile);
}
?> 