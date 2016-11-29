<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

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
            <a class="btn btn-default" href="/user/register"><?php echo Translator::Translate('login') ?></a>
            <a class="btn btn-default" href="/user/register"><?php echo Translator::Translate('register') ?></a>
        </td>
    </tr>
</table>