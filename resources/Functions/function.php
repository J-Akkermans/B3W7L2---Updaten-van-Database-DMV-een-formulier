<?php
        function Amount($column, $name, $table){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT count({$column}) AS {$name} FROM {$table}");
            $sth->execute();
            $count = $sth->fetch();
            return $count["{$name}"];
        } 

        function selectAll($table){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT `id`,`name`,`avatar`, `health`, `bio`, `color`, `attack`, `defense`, `weapon`, `armor`FROM {$table}");
            $sth->execute();
            $data = $sth->fetchAll();
            return $data;
        }

        function selectIndivual($table, $id){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT `id`,`name`,`avatar`, `health`, `bio`, `color`, `attack`, `defense`, `weapon`, `armor`FROM {$table} where id='{$id}'");
            $sth->execute();
            $data = $sth->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        function selectAllLocations(){
            global $sth;
            global $pdo;
            $sth = $pdo->prepare("SELECT * FROM `locations`");
            $sth->execute();
            $data = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }

        function update(){
            global $sth;
            global $pdo;
            echo $_POST['selectStatement'];
            echo $_GET['id'];
            $sth = $pdo->prepare("UPDATE characters SET location='{$_POST['selectStatement']}' WHERE id ='{$_GET['id']}'");
            $sth->execute();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            update();
        }
      
        
?>