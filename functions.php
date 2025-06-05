<?php
function generatePassword($length, $use_uppercase = true, $use_lowercase = true, $use_numbers = true, $use_symbols = true)
{
    $characters = '';
    if ($use_uppercase)
        $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($use_lowercase)
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    if ($use_numbers)
        $characters .= '0123456789';
    if ($use_symbols)
        $characters .= '!@#$%^&*()-_=+';

    if ($characters === '')
        return ''; // Nessun set selezionato

    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $password;
}
?>