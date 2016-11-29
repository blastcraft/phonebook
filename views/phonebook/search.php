<?php
require_once(ROOT . '/views/phonebook/header.php');
?>

    <form action="/search" method="post" role="form" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="exampleInputName1"><?php echo Translator::Translate('name') ?></label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="<?php echo Translator::Translate('name') ?>" name="name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName2"><?php echo Translator::Translate('phone') ?></label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="<?php echo Translator::Translate('phone') ?>" name="phone">
        </div>
        <button type="submit" class="btn btn-default" name="search"><?php echo Translator::Translate('searchbutton') ?></button>
    </form>

<?php require_once(ROOT . '/views/phonebook/footer.php');