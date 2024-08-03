<?php

class Database
{
    public static $conn = NULL;
    public static function getConnection()
    {
        if (Database::$conn == NULL)
        {
            $servername = get_config("server");
            $username = get_config("username");
            $password = get_config("password");
            $dbname = get_config("dbname");

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error)
            {
                die("Connection failed....".$conn->connect_error);
            }
            else
            {
                Database::$conn = $conn;
                return Database::$conn;
            }
        }
        else
        {
            return Database::$conn;
        }
    }

    // public function __destruct()
    // {
    //     $conn->close();
    // }

    public static function comment()
    {
        $conn = Database::$conn;
        $sql = "SELECT * FROM `list` ORDER BY `id` DESC LIMIT 50";
        $check = $conn->query($sql);
        $results = array();
        while ($answer = $check->fetch_assoc()) {
            $results[] = $answer;
        }
        return $results;
    }

    public static function length()
    {
        $conn = Database::$conn;
        $sql = "SELECT * FROM `list` LIMIT 50";
        $result = $conn->query($sql);
        $num_rows = mysqli_num_rows($result);
        return $num_rows;
    }
}