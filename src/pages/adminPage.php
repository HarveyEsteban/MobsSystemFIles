<?php
        include_once '../connection/connection.php';
        $conn = connection();


        if(isset($_POST['logoutbtn']))
        {
            header("location : ./agentPage.php");
        }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="flex items-center flex-col justify-center h-screen bg-slate-400">

        <div class="">
            <h2 class="text-4xl font-bold italic ">Welcome Admin</h2>
        </div>

        <form method="post">
            <button class="" type="submit" name="logoutbtn">
                Logout Button
            </button>
        </form>
</body>
</html>

