<?php
    echo '<h2>Login (PHP)</h2>';
    //the next two lines get the data from the html form
    $Q_Name    = filter_input(INPUT_POST, 'Q_Name');
    $Q_Skills  = filter_input(INPUT_POST, 'Q_Skills');
    $Q_Body    = filter_input(INPUT_POST, 'Q_Body');

    //Cant be empty & contains at least 3 char
    if((strlen($Q_Name) > 0) and (strlen($Q_Name) >= 3)){
        echo "Question Name: $Q_Name <br><br>";
    }elseif (strlen($Q_Name) == 0){
        echo "Question Name: $Q_Name<br> - should not be left empty.<br><br>";
    }elseif (strlen($Q_Name) < 3){
        echo "Question Name: $Q_Name<br> - should be 3 characters or longer.<br><br>";
    }

    //Cant be empty & contains at least 3 char
    if((strlen($Q_Name) > 0) and (strlen($Q_Name) >= 3)){
        echo "Question Name: $Q_Name <br><br>";
    }elseif (strlen($Q_Name) == 0){
        echo "Question Name: $Q_Name<br> - should not be left empty.<br><br>";
    }elseif (strlen($Q_Name) < 3){
        echo "Question Name: $Q_Name<br> - should be 3 characters or longer.<br><br>";
    }
?>