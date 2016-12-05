<?php

class PhoneBook
{

    const SHOW_BY_DEFAULT = 2;

    public static function getTotalRecords()
    {
        $db = Db::getConnection();
        $result = $db->prepare("SELECT count(id) AS count FROM phonebook");
        $result->execute();
        $row = $result->fetch();
        return $row['count'];
    }

    public static function getRecord($name, $phone)
    {
        $phoneRecord = array();
        $db = Db::getConnection();
        $result = $db->prepare("SELECT * FROM phonebook WHERE name=? OR phone=?");
        $result->bindParam(1, $name);
        $result->bindParam(2, $phone);
        $result->execute();
        //$result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $result->fetch()) {
            $phoneRecord[$i]['id'] = $row['id'];
            $phoneRecord[$i]['name'] = $row['name'];
            $phoneRecord[$i]['phone'] = $row['phone'];
            $i++;
        }
         return $phoneRecord;
    }

    public static function getRecordById($id)
    {
        $phoneRecord = array();
        $db = Db::getConnection();
        $result = $db->prepare("SELECT * FROM phonebook WHERE `id`=?");
        $result->bindParam(1, $id);
        $result->execute();
        //$result->setFetchMode(PDO::FETCH_ASSOC);
        $i = 0;
        while($row = $result->fetch()) {
            $phoneRecord[$i]['id'] = $row['id'];
            $phoneRecord[$i]['name'] = $row['name'];
            $phoneRecord[$i]['phone'] = $row['phone'];
            $i++;
        }
        return $phoneRecord;
    }

    public static function getRecordsList($page = 1)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $phoneRecord = array();
        $db = Db::getConnection();
        $result = $db->prepare("SELECT * FROM phonebook "
            . "ORDER BY name "
            . "LIMIT ".intval(self::SHOW_BY_DEFAULT)
            . " OFFSET ".$offset);
        $result->execute();
        $i = 0;
        while($row = $result->fetch()) {
            $phoneRecord[$i]['id'] = $row['id'];
            $phoneRecord[$i]['name'] = $row['name'];
            $phoneRecord[$i]['phone'] = $row['phone'];
            $i++;
        }
        return $phoneRecord;
    }

    public static function addRecord($name, $phone)
    {
        $db = Db::getConnection();
        $result = $db->prepare("INSERT INTO phonebook (name, phone) VALUES (?, ?)");
        $result->bindParam(1, $name);
        $result->bindParam(2, $phone);
        $result->execute();
    }

    public static function redirect($url)
    {
        if(headers_sent()){
            echo '<meta http-equiv="refresh" content="5; url='.$url.'">';
        }else{
            header("Location: ".$url);
        }
        exit;
    }

    public static function delete($id)
    {
        $db = Db::getConnection();
        $result = $db->prepare("DELETE FROM phonebook WHERE `id`=?");
        $result->bindParam(1, $id);
        $result->execute();
    }

    public static function update($id, $name, $phone)
    {
        $db = Db::getConnection();
        $result = $db->prepare("UPDATE `phonebook` SET `name`=?, `phone`=? WHERE `id`=?");
        $result->bindParam(1, $name);
        $result->bindParam(2, $phone);
        $result->bindParam(3, $id);
        $result->execute();
    }
}