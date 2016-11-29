<?php

class Translator
{
    private static $array;

    public static function Translate($command)
    {
        $lang = 'ru';
        if (isset($_POST['lang'])) {
            $lang = $_POST['lang'];
            $_SESSION['lang'] = $lang;
        } elseif (isset($_SESSION['lang'])) {
            $lang = $_SESSION['lang'];
        }
        if (!isset(self::$array[$lang]))
        {
            self::$array[$lang] = parse_ini_file(ROOT."/locale/".$lang.".ini");
        }

        return self::$array[$lang][$command];
    }
}