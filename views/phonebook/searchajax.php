<?php
require_once(ROOT . '/views/phonebook/header.php');
?>


    <form method="post" role="form" class="form-inline">
    <div class="form-group">
        <label class="sr-only" for="exampleInputName1"><?php echo Translator::Translate('name') ?></label>
        <input type="text" class="form-control" id="name" placeholder="<?php echo Translator::Translate('name') ?>" name="name">
    </div>
    <div class="form-group">
        <label class="sr-only" for="exampleInputName2"><?php echo Translator::Translate('phone') ?></label>
        <input type="text" class="form-control" id="phone" placeholder="<?php echo Translator::Translate('phone') ?>" name="phone">
    </div>
    <input type="button" class="btn btn-default" name="search" id="submit" onclick="getlist()" value="<?php echo Translator::Translate('searchbutton') ?> ">
    </form>
    <div id="searchlist">
    </div>

<?php require_once(ROOT . '/views/phonebook/footer.php');