<?php
    echo '<h2>Registration Results</h2>';
    //the next five lines get the data from the html form
    $F_Name = filter_input(INPUT_POST, 'F_Name');
    $L_Name = filter_input(INPUT_POST, 'L_Name');
    $B_Day = filter_input(INPUT_POST, 'B_Day');
    $email = filter_input(INPUT_POST, 'email');
    $pass  = filter_input(INPUT_POST, 'pass');

    //Cant be empty
    if (strlen($F_Name) > 0){
        echo "First Name: $F_Name <br><br>";
    }elseif (strlen($F_Name) == 0) {
        echo "First Name: $F_Name<br> - should not be left empty.<br><br>";
    }

    //Cant be empty
    if (strlen($L_Name) > 0){
        echo "Last Name: $L_Name <br><br>";
    }elseif (strlen($L_Name) == 0){
        echo "Last Name: $L_Name<br> - should not be left empty.<br><br>";
    }

    //Cant be empty
    if (strlen($B_Day) > 0){
        echo "Birthday: $B_Day <br><br>";
    }elseif (strlen($B_Day) == 0) {
        echo "Birthday: $B_Day<br> - should not be left empty.<br><br>";
    }

    //Cant be empty & contains @ character
    if((strlen($email) > 0) and (strpos($email, "@") != FALSE)){
        echo "Email Address: $email <br><br>";
    }elseif (strlen($email) == 0){
        echo "Email Address: $email<br> - should not be left empty.<br><br>";
    }elseif (strpos($email, "@") != TRUE){
        echo "Email Address: $email<br> - should contain '@' symbol.<br><br>";
    }

    //Cant be empty & at least 8 character
    if((strlen($pass) > 0) and (strlen($pass) >= 8)){
        echo "Password: $pass <br><br>";
    }elseif ((strlen($pass) == 0)){
        echo "Password: $pass<br> - should not be left empty.<br><br>";
    }elseif ((strlen($pass) < 8)){
        echo "Password: $pass<br> - should be 8 characters or longer.<br><br>";
    }

?>