<?php
function generatePass()
{
    $symbols = '!?.-_';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($letters);
    $numbers = '0123456789';
    if (isset($_GET['pwLenght'])) {
        $pwLenght = $_GET['pwLengt'];
        $newpassword = '';
        while (strlen($newpassword) < $pwLenght) {
            $list = $symbols . $letters . $upLetters . $numbers;

        }
    }
}
?>