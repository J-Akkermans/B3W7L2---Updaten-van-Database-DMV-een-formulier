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
            $sth = $pdo->prepare("SELECT `name`,`avatar`, `health`, `bio`, `color`, `attack`, `defense`, `weapon`, `armor`FROM {$table} where id='{$id}'");
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
        // function updateLocation(){
        //     global $sth;
        //     global $pdo;
        //     $sth = $pdo->prepare("INSERT INTO characters (location) SELECT Name FROM locations WHERE name='{$test}'");
        //     $sth->execute();
        // }
        
        $selectOption = $_POST['selectStatement'];
        echo $selectOption;
?>