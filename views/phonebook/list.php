<?php
require_once(ROOT . '/views/phonebook/header.php');
echo "<hr>";
foreach ($records as $record) {
    if ($record['name'] != "" and $record['phone'] != "") {
        echo "name: " . $record['name'] . "<br>";
        echo "phone: " . $record['phone'] . "<br>";
        echo "<hr>";
    }
}