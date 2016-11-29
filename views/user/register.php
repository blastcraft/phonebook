<?php
require_once(ROOT . '/views/phonebook/header.php');
?>
    <form action="/user/register" method="post" role="form" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="exampleInputName1"><?php echo Translator::Translate('name') ?></label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="<?php echo Translator::Translate('name') ?>" name="name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName2"><?php echo $GLOBALS['array']['email'] ?></label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="<?php echo Translator::Translate('email') ?>" name="email">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName2"><?php echo $GLOBALS['array']['password'] ?></label>
            <input type="password" class="form-control" id="exampleInputName2" placeholder="<?php echo Translator::Translate('password') ?>" name="password">
        </div>
        <button type="submit" class="btn btn-default" name="register"><?php echo Translator::Translate('regbutton') ?></button>
    </form>
<?php
require_once(ROOT . '/views/phonebook/footer.php');