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

    <!-- Tailwind Css Link -->
     <link rel="stylesheet" href="../css/output.css">
</head>
<body class="flex flex-col bg-white h-screen bg-cover bg-center bg-no-repeat bg-mobs-bg">

    <div class="flex justify-center bg-slate-500 items-center mb-20 p-5">
        <img class="w-20 mr-1" src="../img/logo.png" alt="mbos-logo">
        <h2 class="text-5xl italic font-bold text-black">Employee Portal</h2>
    </div>

    <div class="flex items-center justify-center">
    <form method="post">

            <div class="flex flex-col gap-2 w-120 bg-slate-400 bg-opacity-80 p-20 pb-32 rounded-2xl ">

            <div class="flex mb-5 bg-white rounded-lg p-2">
            <Label class=" text-lg text-center font-bold bg-transparent font- p-2">Enter Mobs ID</Label>
            <input type="text" name="mobsID" class="mobsID bg-transparent text-center text-lg flex-auto w-52">
            </div>

            <div class="flex mb-5 bg-white rounded-lg p-2">
            <label class=" flex-grow text-lg text-center bg-transparent font-bold p-2 rounded-">Enter Password</label>
            <input type="password" name="mobsPass" class="mobsPas bg-transparent text-center flex-initial w-52 ">
            </div>

            <button type="submit" name="submitBtn" class="submitBtn bg-red-500  rounded-md p-2 font-bold flex-1">Login</button>

            </div>
        </form>

    </div>

    <div class="flex justify-center items-center bg-slate-500 mt-auto p-5">
        <h1 class="text-4xl italic font-bold text-black">Est. 2013</h1>
    </div>


       
</body>
</html>