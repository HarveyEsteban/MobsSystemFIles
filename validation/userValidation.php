<?php

    include_once '../connection/connection.php';
    $conn = connection();



    function checkLogin($id, $pass)
    {
        // Check if there are any account linked to the Credential typed by the user
        global $conn;
        

        $sql = "SELECT * FROM users WHERE mobs_id = :id AND mobs_password = :pass AND isActive = '1'";
        $stmt = $conn->prepare($sql);
        $stmt -> bindParam(':id', $id, PDO:: PARAM_STR);
        $stmt -> bindParam(':pass', $pass, PDO:: PARAM_STR);
        $stmt-> execute();

        if($stmt -> rowCount() > 0)
        {
            $row = $stmt -> fetch(PDO::FETCH_ASSOC);
            $user_id = $row['mobs_id'];            
            return $user_id;
        }
        else{
            return false;
        }

        
    }

