<?php

session_start();
require 'connect.php';

function debug($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

//Проверка выполнения запроса к БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}

//Запрос на получение данных одной таблицы
function selectAll($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table"; //запрос с параметрами WHERE admin =1 AND username = 'Sasha'

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){  //условие проверки где в параметрах строка, а где число
                $value = "'".$value."'";  //для подставления ковычек, нужно что бы в бд заносилась запись по синтаксису число без ковычек, строа с ковычками
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

//Запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params =[]){
    global $pdo;
    $sql = "SELECT * FROM $table"; //запрос с параметрами WHERE admin =1 AND username = 'Sasha'

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){  //условие проверки где в параметрах строка, а где число
                $value = "'".$value."'";  //для подставления ковычек, нужно что бы в бд заносилась запись по синтаксису число без ковычек, строа с ковычками
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
    //$sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

/*$params = [
    'admin' => 1,
    'username' => 'Sasha'
];*/

//debug(selectAll('users', $params));
//debug(selectOne('users'));

//запись в таблицу БД
function insert($table, $params){
    global $pdo;
    //INSERT INTO `users` (admin,username,email,password) VALUES ('1','44', 'for4@test.com', '4444');
    $i = 0;
    $coll = '';
    $mask = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $coll = $coll . "$key";
            $mask = $mask . "'" ."$value" . "'";
        }else{
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }


    $sql = "INSERT INTO $table($coll) VALUES ($mask)";

    //debug($sql);
    //exit();
    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

/*$arrData = [
    'admin' => '1',
    'username' => '1222125',
    'email' => 're47233@re.ru',
    'password' => '12144fghjdh12',
    'created' => '2021-01-21 00:00:01'
];*/

//insert('users',$arrData);

//обновление данных
function update($table, $id, $params){
    global $pdo;
    //INSERT INTO `users` (admin,username,email,password) VALUES ('1','44', 'for4@test.com', '4444');
    $i = 0;
    $str = '';
    foreach ($params as $key => $value){
        if ($i === 0){
            $str = $str . $key . " = '" . $value . "'";
        }else{
            $str = $str .", " . $key . " = '" . $value . "'";
        }
        $i++;
    }
    //UPDATE `users` SET `username`= 'test', password='55555' WHERE `id` = 14
    $sql = "UPDATE $table SET $str WHERE id = $id";

//    debug($sql);
//    exit();

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);

    $param = [
       'admin' => '1',
       'password' => '11112222',
       'email' => 'sdfsd@yandex.ru'
    ];

    update('users', 2, $param);
}


//удаление данных
function delete($table, $id){
    global $pdo;
    //DELETE FROM `users` WHERE id = 19
    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}
//delete('users',12);