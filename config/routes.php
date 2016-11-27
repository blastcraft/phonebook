<?php

return array(
    'add' => 'phonebook/showaddform',
    'search' => 'phonebook/showsearchform',
    'delete/([0-9]*)' => 'phonebook/delete/$1',
    'manage/([0-9]*)' => 'phonebook/manage/$1',
    'ru' => 'phonebook/langru',
    'en' => 'phonebook/langen',
    '' => 'phonebook/list',
);