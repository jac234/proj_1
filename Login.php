<?php
    echo '<h2>Login (PHP)</h2>';
    //the next two lines get the data from the html form
    $email = filter_input(INPUT_POST, 'email');
    $pass  = filter_input(INPUT_POST, 'pass');

    //using an array to hold values
    $login = array("$email", "$pass");

    echo "$login[0] <br><br>";
    echo "$login[1] <br><br>";
?>
