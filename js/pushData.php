<?php

    $data = json_decode(file_get_contents("php://input"));

    $host = "localhost";
    $user = "root";
    $pass = "mysql";
    $db = "pvjtt";

    $con = new mysqli($host, $user, $pass, $db);

    if($con->connection_error){
        die("DB con failed: " . $con->connection_error);
    }

    $sql = "INSERT INTO `package`(`name`, `description`) VALUES ('$data->name', '$data->description')";

    $qry = $con->query($sql);

    $sql = "SELECT * FROM `package`";

    $qry = $con->query($sql);

    $data = array();

    if ($qry->num_rows > 0){
        while ($row = $qry->fetch_objects()){
            $data[] = $row;
        }
    } else {
        $data = null;
        
    }

    $con->close();

    echo json_encode($data);

>