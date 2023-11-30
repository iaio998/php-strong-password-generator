<?php
function generatePass()
{
    $symbols = '!?.-_';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($letters);
    $numbers = '0123456789';
    if (isset($_GET['pwLength'])) {
        $pwLength = $_GET['pwLength'];
        $newpassword = '';
        while (strlen($newpassword) < $pwLength) {
            $list = $symbols . $letters . $upLetters . $numbers;
            $newChar = $list[rand(0, strlen($list) - 1)];
            if (!strpos($newpassword, $newChar)) {
                $newpassword .= $newChar;
            }
        }
        return $newpassword;
    }
}
;
?>