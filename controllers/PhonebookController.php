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
        require_once(ROOT . '/views/phonebook/add.php');
        return true;
    }

    public function actionInsert()
    {
        PhoneBook::insert();
        return true;
    }

    public function actionShowsearchform()
    {
        require_once(ROOT . '/views/phonebook/search.php');
        return true;
    }

    public function actionRecord()
    {
        $records = PhoneBook::search();
        require_once(ROOT . '/views/phonebook/list.php');
        return true;
    }
}