<?php
class DatabaseConn {

String $host;
String $user;
String $pass;
String $database;


public function put($table, $columns, $values) {
    $mysqli = new mysqli($host, $user, $pw, $db);

    if ($mysqli->connect_errno) {
        echo "BŁĄD POŁĄCZENIA Z BAZĄ DANYCH: ";
        return false;
    }

    $query = "INSERT INTO $table ($columns) VALUES ($values)";
    
    $Ok = false;

    $statement = $mysqli->prepare($query);
    
    if($statement === TRUE) {
            echo "REKORD DODANY POPRAWNIE";
            $allOk = true;
        } else {
            echo "BŁĄD PODCZAS DODAWANIA REKORDU: " .$mysqli->error;
        }

        $statement->close();
    $mysqli->close();
    return $Ok;
}


public function get($table, $columns, $arrayOptions) {
    $mysqli = new mysqli($host, $user, $pw, $db);

    if ($mysqli->connect_errno) {
        echo "BŁĄD POŁĄCZENIA Z BAZĄ DANYCH: " . $mysqli->connect_error;
        return false;
    }

    $query = "SELECT $columns FROM $table WHERE $arrayOptions";
    
    $result = $mysqli->query($query);

    if ($result !== false) {
        $Ok = false;

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                print_r($row);
            }
            $Ok = true;
        } else {
            echo "Brak wyników";
        }

        $result->close();
    } else {
        echo "BŁĄD PODCZAS WYKONYWANIA ZAPYTANIA: " . $mysqli->error;
    }

    $mysqli->close();

    return $Ok;
}



}