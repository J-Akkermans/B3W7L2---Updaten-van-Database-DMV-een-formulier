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

        // $arrayName = selectIndivual("characters", "1");
        

        
        // echo $test[0]['avatar'];
       


        
?>