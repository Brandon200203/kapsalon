<?php

class DbConfig{

    public function connect(){
        try{
            //LET HIERONDER OP DAT JE DE JUISTE DATABASE NAAM EN LOGIN GEGEVEN GEBRUIKT!
            $conn = new PDO("mysql:host=localhost;dbname=db_examen", 'root', '');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}

?>