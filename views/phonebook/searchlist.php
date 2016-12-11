<br>
<table class="table table-striped">
    <tr>
        <th width="10%">№</th>
        <th width="30%"><?php echo Translator::Translate('name') ?></th>
        <th width="20%"><?php echo Translator::Translate('phone') ?></th>
        <th>Manage</th>
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
                    <a class="btn btn-default" href="/cart/add/<?php echo $record['id']; ?>"><?php echo Translator::Translate('addtocart') ?></a>
                </td>
            </tr>
            <?php
            $i++;
        }
    }
    ?>
</table>