<?php
require_once(ROOT . '/views/phonebook/header.php');
require_once(ROOT.'/components/Translator.php');
?>
<table class="table table-striped">
    <tr>
        <th width="10%">№</th>
        <th width="30%"><?php echo Translator::Translate('name') ?></th>
        <th width="20%"><?php echo Translator::Translate('phone') ?></th>
        <th><?php echo Translator::Translate('manage') ?></th>
    </tr>
<?php
$i = 1;
foreach ($records as $record) {
    if ($record['name'] != "" and $record['phone'] != "") {
?>
        <tr>
            <td> <?php echo $i; ?> </td>
            <td> <?php echo $record['name']; ?> </td>
            <td> <?php echo $record['phone']; ?></td>
            <td>
                <a class="btn btn-default" href="/manage/<?php echo $record['id']; ?>"><?php echo Translator::Translate('manage') ?></a>
                <a class="btn btn-default" href="/delete/<?php echo $record['id']; ?>"><?php echo Translator::Translate('delete') ?></a>
            </td>
        </tr>
<?php
        $i++;
    }
}
?>
</table>
<?php
require_once(ROOT . '/views/phonebook/footer.php');