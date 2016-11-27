<?php

include_once ROOT. '/models/PhoneBook.php';

class PhonebookController
{

    public function actionList()
    {
        $records = PhoneBook::getRecordsList();
        require_once(ROOT . '/views/phonebook/list.php');
        return true;
    }

    public function actionShowaddform()
    {
        if (isset($_POST["add"])) {
            PhoneBook::addRecord($_POST['name'], $_POST['phone']);
            //header("Location: http://{$_SERVER['SERVER_NAME']}/");
            PhoneBook::redirect('http://'.$_SERVER['SERVER_NAME'].'/');
            die();
        } else {
            require_once(ROOT . '/views/phonebook/add.php');
        }
        return true;
    }

    public function actionShowsearchform()
    {
        if (isset($_POST["search"])) {
            $records = PhoneBook::getRecord($_POST['name'], $_POST['phone']);
            require_once(ROOT . '/views/phonebook/search.php');
            require_once(ROOT . '/views/phonebook/list.php');
        } else {
            require_once(ROOT . '/views/phonebook/search.php');
        }
        return true;
    }

    public function actionLangru()
    {
        $_SESSION['lang'] = 'ru';
        PhoneBook::redirect($_SERVER['HTTP_REFERER']);
        die();
    }

    public function actionLangen()
    {
        $_SESSION['lang'] = 'en';
        PhoneBook::redirect($_SERVER['HTTP_REFERER']);
        die();
    }

    public function actionDelete($id)
    {
        PhoneBook::delete($id);
        PhoneBook::redirect('http://'.$_SERVER['SERVER_NAME'].'/');
        die();
    }

    public function actionManage($id)
    {
        $records = array();
        if (isset($_POST["manage"])) {
            Phonebook::update($id, $_POST['name'], $_POST['phone']);
            $records = PhoneBook::getRecordById($id);
        } else {
            $records = PhoneBook::getRecordById($id);
        }
        require_once(ROOT . '/views/phonebook/list.php');
        require_once(ROOT . '/views/phonebook/manage.php');
        return true;
    }
}