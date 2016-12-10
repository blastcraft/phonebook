<?php
require_once(ROOT . '/views/phonebook/header.php');
?>
    <table class="table table-striped">
        <tr>
            <th width="10%">№</th>
            <th width="25%"><?php echo Translator::Translate('name') ?></th>
            <th width="20%"><?php echo Translator::Translate('phone') ?></th>
            <th width="15%"><?php echo Translator::Translate('quantity') ?></th>
            <th><?php echo Translator::Translate('price') ?></th>
        </tr>
        <?php
        $i = 1;
        foreach ($products as $record) {
            if ($record['name'] != "" and $record['phone'] != "") {
                ?>
                <tr>
                    <td> <?php echo $i; ?> </td>
                    <td> <?php echo $record['name']; ?> </td>
                    <td> <?php echo $record['phone']; ?></td>
                    <td> <?php echo $productsInCart[$record['id']]; ?></td>
                    <td> <?php echo $record['price']; ?></td>
                </tr>
                <?php
                $i++;
            }
        }
        ?>
        <tr>
            <td colspan="4"><?php echo Translator::Translate('totalprice') ?>:</td>
            <td><?php echo $totalPrice; ?></td>
        </tr>
    </table>
<?php

require_once(ROOT . '/views/phonebook/footer.php');