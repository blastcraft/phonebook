<?php

class Translator
{
    public static function Translate($command)
    {
        $lang = 'ru';
        if (isset($_POST['lang'])) {
            $lang = $_POST['lang'];
            $_SESSION['lang'] = $lang;
        } elseif (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        $array = parse_ini_file(ROOT."/locale/".$lang.".ini");

        return $array[$command];
    }
}