<?php
require_once(ROOT . '/views/phonebook/header.php');
?>
    <?php if (isset($errors) && is_array($errors)): ?>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li class="text-danger"> <?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="/user/login" method="post" role="form" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="exampleInputName1"><?php echo Translator::Translate('login') ?></label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="<?php echo Translator::Translate('login') ?>" name="login">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName2"><?php echo $GLOBALS['array']['password'] ?></label>
            <input type="password" class="form-control" id="exampleInputName2" placeholder="<?php echo Translator::Translate('password') ?>" name="password">
        </div>
        <button type="submit" class="btn btn-default" name="log-in"><?php echo Translator::Translate('logbutton') ?></button>
    </form>
<?php
require_once(ROOT . '/views/phonebook/footer.php');