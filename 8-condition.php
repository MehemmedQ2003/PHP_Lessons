<?php

    $db_username = "mehemmedqardasov";
    $db_password = "11112003Mm";

    

    if($db_username == "mehemmedqardasov" and $db_password == "11112003Mm"){
        echo "Username and password is true";
    }
    else if($db_username == "mehemmedqardasov" or $db_password == "11112003"){
        echo "Username is true and password is wrong";
    }
    else if($db_username == "mehemmedqardasov123" or $db_password == "11112003Mm"){
        echo "Username is wrong and password is true";
    }
    else{
        echo "Username is wrong";
    }

?>