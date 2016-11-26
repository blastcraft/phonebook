<?php
require_once(ROOT . '/views/phonebook/header.php');
echo "<hr>";
foreach ($records as $record) {
    if ($record['name'] != "" and $record['phone'] != "") {
        echo $GLOBALS['array']['name'].": " . $record['name'] . "<br>";
        echo $GLOBALS['array']['phone'].": " . $record['phone'] . "<br>";
        echo "<hr>";
    }
}

require_once(ROOT . '/views/phonebook/footer.php');