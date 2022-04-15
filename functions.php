<?php
function test_input($data) {
    $data =trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
  return $data;
};

function datedifference($userdate) {
    $todaysdate = date("Y-m-d");
    $date1 = date_create($userdate);
    $date2 = date_create($todaysdate);
    $diff = date_diff($date1,$date2);  //Använder date_diff för att räkna ut dagarna
  return $diff-> format("%a");
};

?>