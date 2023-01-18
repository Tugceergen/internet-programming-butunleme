<?php

class Badminton
{
    private function getDbConf()
    {
        return array("mysql:host=localhost;dbname=basket", "root", "secret");
    }

    public function getOyuncularByTakimId($takimId = 0)
    {
        if ($takimId) {
            $dbCongArr = $this->getDbConf();
            try {
                $db = new PDO($dbCongArr[0], $dbCongArr[1], $dbCongArr[2]);
            } catch (PDOException $e) {
                return false;
            }
            $query = $db->prepare("SELECT * FROM tbl_oyuncu    JOIN tbl_takim ON tbl_oyuncu.takim_id = tbl_takim.id   WHERE tbl_oyuncu.takim_id = :takimid");
            $result = $query->execute([":takimid"=>$takimId]);
            $oyuncular = $query->fetchAll(PDO::FETCH_ASSOC);
            return $oyuncular;
        }
    }

    public function getOyuncuById($oyuncuId = 0)
    {
        if ($oyuncuId) {
            $dbCongArr = $this->getDbConf();
            try {
                $db = new PDO($dbCongArr[0], $dbCongArr[1], $dbCongArr[2]);
            } catch (PDOException $e) {
                return false;
            }
            $query = $db->prepare("SELECT * FROM tbl_oyuncu    JOIN tbl_takim ON tbl_oyuncu.takim_id = tbl_takim.id   WHERE tbl_oyuncu.id = :oyuncuId");
            $result = $query->execute([":oyuncuId"=>$oyuncuId]);
            $oyuncu = $query->fetch(PDO::FETCH_ASSOC);
            return $oyuncu;
        }
    }






}