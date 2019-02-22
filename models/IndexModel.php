<?php


class IndexModel{


    public function checkUser(){
        $login = $_POST['login'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM  webdewel_cms WHERE login = :login AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);

        $stmt->execute();
        $res= $stmt->fetch(PDO::FETCH_ASSOC);


        if (!empty($res)){
echo "OK";
        }else{
            return false;
        }
    }


}