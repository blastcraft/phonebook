<?php

class PhoneBook
{
    /** Returns single record with specified id
     * @rapam integer &id
     */
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

    public static function getRecordsList()
    {
        $phoneRecord = array();
        $db = Db::getConnection();
        $result = $db->prepare("SELECT * FROM phonebook ORDER BY name LIMIT 10");
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

    public static function insert()
    {
        if (isset($_POST["add"])) {
            self::addRecord($_POST['name'], $_POST['phone']);
            //header("Location: http://{$_SERVER['SERVER_NAME']}/");
            self::redirect('http://'.$_SERVER['SERVER_NAME'].'/');
            die();
        }
    }

    public static function search()
    {
        if (isset($_POST["search"])) {
            return self::getRecord($_POST['name'], $_POST['phone']);
        }
    }

    private static function redirect($url){
        if(headers_sent()){
            echo '<meta http-equiv="refresh" content="5; url='.$url.'">';
        }else{
            header("Location: ".$url);
        }
        exit;
    }
}