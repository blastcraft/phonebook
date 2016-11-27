<?php
require_once(ROOT . '/views/phonebook/header.php');
require_once(ROOT.'/components/Translator.php');
?>

    <form action="/add" method="post" role="form" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="exampleInputName1"><?php echo Translator::Translate('name') ?></label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="<?php echo Translator::Translate('name') ?>" name="name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName2"><?php echo $GLOBALS['array']['phone'] ?></label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="<?php echo Translator::Translate('phone') ?>" name="phone">
        </div>
        <button type="submit" class="btn btn-default" name="add"><?php echo Translator::Translate('phone') ?></button>
    </form>

<?php require_once(ROOT . '/views/phonebook/footer.php');