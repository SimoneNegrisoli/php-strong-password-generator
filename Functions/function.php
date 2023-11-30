<?php

function generatePassword()
{
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters = 'qwertyuioplkjhgfdsazxcvbnm';
    $lettersUp = strtoupper($letters);
    $numbers = '1234567890';

    if (isset($_GET['passLenght'])) {
        $passLenght = $_GET['passLenght'];
        $newpassword = '';
        while (strlen($newpassword) < $passLenght) {
            $valoriNewPass = $symbols . $letters . $lettersUp . $numbers;
            $nuovoValore = $valoriNewPass[rand(0, strlen($valoriNewPass) - 1)];
            if (!strpos($newpassword, $nuovoValore)) {
                $newpassword .= $nuovoValore;
            }
        }
        return $newpassword;
    }
}

?>