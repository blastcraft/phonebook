<?php require_once(ROOT . '/views/phonebook/header.php'); echo "<hr>"; ?>
<form action="/search" method="post">
    <p><?php echo $GLOBALS['array']['name'] ?>: <input type="text" name="name"></p>
    <p><?php echo $GLOBALS['array']['phone'] ?>: <input type="text" name="phone"></p>
    <input type="hidden" name="search" value="searched">
    <p><input type="submit" value="<?php echo $GLOBALS['array']['searchbutton'] ?>"></p>
</form>

<?php require_once(ROOT . '/views/phonebook/footer.php');