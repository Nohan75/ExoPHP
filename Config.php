<?php

    $header = "<header><a href=\"index.php\">Home</a><a href=\"Formulaire.php\"> Contact</a><a href=\"Connect.php\"> Connexion</a></header>";
    $doctype_START = "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>EXO 00</title>
    </head>
    <body>";
    $doctype_END = "</body>
    </html>";
    $form = "<form action=\"\" method=\"POST\">
    
    Nom : <input name=\"nom\" type=\"text\" placeholder=\"Votre nom\">
    Email : <input name=\"email\" type=\"email\" placeholder=\"Votre email\">
    Message : <input name=\"message\" type=\"textarea\" placeholder=\"Votre message\">
    <button name=\"validButton\" type=\"submit\">Valider</button>

</form>";
    $message = "";
    function test_form($input1, $input2, $input3){
        if(!empty($input1) && !empty($input2) && !empty($input3)){
            $message = "$input1, Votre message a bien été envoyé !";
        } else {
            $message = "Formulaire incomplet, Veuillez remplir correctement le fomulaire <a href=\"Formulaire.php\">retry</a>";
        }
        echo $message;
    }

?>
