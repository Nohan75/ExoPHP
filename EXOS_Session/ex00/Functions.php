<?php
    session_start();
    include('data.php');

    for($i = 0; $i < count($Users); $i++){
        $userpass[] = "$Users[$i]:$Pass[$i]";
    }

    function to_userpass($user, $pass){
        return $Get_userpass = "$user:$pass";
    }


    if($_GET['username'] == $Users[0] && $_GET['password'] == $Pass[0]){
        header('Location: index.php?success=true');
        $_SESSION['username'] = $_GET['username'];
        die();
    } else {
        header("Location: index.php?error=badUser&good=$Users[0]:$Pass[0]");
        die();
    }


    
    // if(in_array($_GET['username'], $Users) && in_array($_GET['password'], $Pass)){
    //     header('Location: index.php?success=true');
    // } else {
    //     header('Location: index.php?error=NotaUser');
    // }


?>