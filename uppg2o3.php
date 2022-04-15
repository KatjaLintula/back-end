<article>
    <form action="index.php" method="get">
        Dag: <input id="dag" type="number" name="day"><br>
        Månad: <input id="month" type="number" name="month"><br>
        År: <input id="year" type="number" name="year"><br>
        <input class="button" type="submit" value="Klicka här">
    </form>

    <?php
    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];

    $manader = array("December","Januari","Februari","Mars","April","Maj","Juni","Juli",
    "Augusti","September","Oktober","November");
    $veckodagar = array("Söndagen","Måndagen","Tisdagen","Onsdagen","Torsdagen","Fredagen","Lördagen");
    $date=getdate();
    $today="$date[wday]";  //Hämtar index för veckodag från getdate
    $monthnow = "$date[mon]";  //Hämtar index för månaden
    print("Idag är det ".$veckodagar[$today]. " den ".date("d")." ".$manader[$monthnow]. " ".date("Y"). "<br>");
    print(date("d.m.Y")." vecka nr. ".date("W")."<br>");

    
    
    if(($day>0) && ($day<31)) {
        $giventid = mktime(0,0,0,$month,$day,$year);
        $givenDate = date('Y-m-d',$giventid);
        print("<br>Ditt inmatade datum är: ".$givenDate."<br>");
        $difference = datedifference($givenDate);   //Kör det givna datumet i funktionen som räknar hur många dagar det är emellan.
        print("Det är ".$difference." dagar mellan datumet och dagens datum.");
    } elseif (empty($day)) {
        print("");
    } else {
        print("Det är inget datum");
    }
    ?>
</article>
