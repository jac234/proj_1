<?php
echo '<h2>Registration Form</h2>';
//the next five lines get the data from the html form
$F_Name = filter_input(INPUT_POST, 'F_Name');
$L_Name = filter_input(INPUT_POST, 'L_Name');
$B_Day = filter_input(INPUT_POST, 'B_Day');
$email = filter_input(INPUT_POST, 'email');
$pass  = filter_input(INPUT_POST, 'pass');


echo "$F_Name <br><br>"; //Cant be empty
echo "$L_Name <br><br>"; //Cant be empty
echo "$B_Day <br><br>"; //Cant be empty
echo "$email <br><br>"; //Cant be empty & contains @ character
echo "$pass <br><br>"; //Cant be empty & at least 8 character
?>