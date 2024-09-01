<?php
    
    include_once '../connection/connection.php';
    include_once '../validation/userValidation.php';
    $conn = connection();

    if(isset($_POST['submitBtn']))
    {
        $inputID = $_POST['mobsID'] ?? " ";
        $inputPass = $_POST['mobsPass'] ?? "";

        $checkuser = checkLogin($inputID, $inputPass);
        $obj = json_decode($checkuser);

        if($checkuser == false)
        {
            echo "Invalid Mobs ID or Password. Please try again.";
        }
        else
        {
            $agent_name = $obj->{'name'};
            $agent_pos = $obj->{'position'};
            $agent_id = $obj ->{'mobs_id'};
        }

    }

    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <Label>Enter Mobs ID</Label>
            <input type="text" name="mobsID" class="mobsID">
            <label>Enter Password</label>
            <input type="password" name="mobsPass" class="mobsPass">
            <button type="submit" name="submitBtn" class="submitBtn">Submit</button>
        </form>
    </div>
</body>
</html>