<?php


function generatePassword($lunghezzaPsw)
{
    $characters = "abcdefghilmnopqrstuvzABCDEFGHILMNOPQRSTUVZ1234678910!£$%&?*#";
    $charactersLenght = mb_strlen($characters);
    // var_dump($characters[10]);



    for ($i = 0, $result = ''; $i < $lunghezzaPsw; $i++) {
        $charIndex = rand(0, $charactersLenght);
        // var_dump($charIndex);
        $result .= mb_substr($characters, $charIndex, 1);
    }
    return $result;
    // var_dump($result);
}


?>