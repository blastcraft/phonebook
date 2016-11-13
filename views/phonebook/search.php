<?php require_once(ROOT . '/views/phonebook/header.php'); echo "<hr>"; ?>
<form action="/record" method="post">
    <p>Name: <input type="text" name="name"></p>
    <p>Phone: <input type="text" name="phone"></p>
    <input type="hidden" name="search" value="searched">
    <p><input type="submit"></p>
</form>