<?php

    include_once '../connection/connection.php';
    $conn = connection();



    function checkLogin($id, $pass)
    {
        // Check if there are any account linked to the Credential typed by the user
        global $conn;
        $sql = "SELECT * FROM users WHERE mobs_id = :id AND mobs_password = :pass";
        $stmt = $conn->prepare($sql);
        $stmt -> bindParam(':id', $id, PDO:: PARAM_STR);
        $stmt -> bindParam(':pass', $pass, PDO:: PARAM_STR);
        $stmt-> execute();

        if($stmt -> rowCount() > 0)
        {
            $row = $stmt -> fetch(PDO::FETCH_ASSOC);
            $user_id = $row['mobs_id'];

            $user_Access = checkAccess($user_id);

            return $user_id;
        }
        else{
            return false;
        }

        
    }


    function checkAccess($mobsID)
    {
        // Check what access should be given to the user based on their account
        global $conn;

        $stmt = "SELECT mobs_position FROM users WHERE mobs_id = :id and isActive = '1' ";
        $sql = $conn->prepare($stmt);
        $sql->bindParam(':id', $mobsID, PDO::PARAM_STR);
        $sql-> execute();

        if($sql -> rowCount() > 0)
        {
            $row = $sql -> fetch(PDO:: FETCH_ASSOC);
            $mobsPos = $row['mobs_position'];
            return $mobsPos;
        }
        else{
            return false;
        }

        
    }


?>