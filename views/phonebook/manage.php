<?php
require_once(ROOT . '/views/phonebook/header.php');
?>

    <form action="/manage/<?php echo $records[0]['id'] ?>" method="post" role="form" class="form-inline">
        <div class="form-group">
            <label class="sr-only" for="exampleInputName1"><?php echo Translator::Translate('name') ?></label>
            <input type="text" class="form-control" id="exampleInputName1" value="<?php echo $records[0]['name'] ?>" name="name">
        </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputName2"><?php echo Translator::Translate('phone') ?></label>
            <input type="text" class="form-control" id="exampleInputName2" value="<?php echo $records[0]['phone'] ?>" name="phone">
        </div>
        <button type="submit" class="btn btn-default" name="manage"><?php echo Translator::Translate('managebutton') ?></button>
    </form>

<?php require_once(ROOT . '/views/phonebook/footer.php');