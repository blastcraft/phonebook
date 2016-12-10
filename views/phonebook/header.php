<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href=../css/bootstrap.min.css rel=stylesheet>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<table class="table">
    <tr>
        <td>
            <h1>My Phonebook</h1>
        </td>
        <td align="right">
            <a class="btn btn-default" href="/ru">[Ru]</a>
            <a class="btn btn-default" href="/en">[En]</a>
        </td>
    </tr>
</table>

<table class="table">
    <tr class="success">
        <td align="left">
            <a class="btn btn-default" href="/"><?php echo Translator::Translate('home') ?></a>
            <a class="btn btn-default" href="/add"><?php echo Translator::Translate('add') ?></a>
            <a class="btn btn-default" href="/search"><?php echo Translator::Translate('search') ?></a>
        </td>
        <td align="right">
            <a href="/cart"><?php echo Translator::Translate('cart'); ?> (<?php echo Cart::countItems() ?>)</a>
            <?php if (isset($_SESSION['login']) && $_SESSION['login'] != 'guest'): ?>
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><?php echo $_SESSION['login']; ?></button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#"><?php echo Translator::Translate('userconf'); ?></a></li>
                        <li><a href="/user/logout"><?php echo Translator::Translate('logout'); ?></a></li>
                    </ul>
                </div>
            <?php else: ?>
                <a class="btn btn-default" href="/user/register"><?php echo Translator::Translate('register') ?></a>
                <a class="btn btn-default" href="/user/login"><?php echo Translator::Translate('login') ?></a>
            <?php endif; ?>
        </td>
    </tr>
</table>