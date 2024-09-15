<?php
        include_once '../connection/connection.php';
        $conn = connection();


        if(isset($_POST['logoutbtn']))
        {
            header("location: ./loginPage.php");
            session_unset();
        }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css Tailwind Link -->
    <link rel="stylesheet" href="../css/output.css">
</head>
<body class="flex items-center justify-center h-screen bg-slate-400">

        <!-- Side Navigation Panel -->
        <div class="flex flex-col p-8 h-screen items-center w-90  bg-gray-600 flex-initial">
            <h2 class="text-5xl text-white font-bold italic ">Admin Panel</h2>

        <div class="flex flex-col items-start mt-10  gap-14">
            
            <a href="#" class="text-3xl">
                    <i class="fa-solid fa-gauge">
                    </i>
                    Dashboard
                </a>

            <a href="#" class="text-3xl">
                <i class="fa-solid fa-users"></i>
                Manage Employee
            </a>

            <a href="#" class="text-3xl">
                <i class="fa-solid fa-file-lines"></i>                
                Certificate Request
            </a>


            <a href="#" class="text-3xl">
                <i class="fa-solid fa-circle-exclamation"></i>              
                Employee Violation
            </a>

        </div>

    <form method="post" class=" mt-auto">
        <button type="submit" name="logoutbtn" class="text-2xl p-4 rounded-2xl bg-slate-100">
        <i class="fa-solid fa-right-from-bracket"></i>
        Logout
        </button>
        </form>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-2 p-8 bg-white h-screen">

        <!-- Content Header -->
            <div class="bg-blue-700 h-20 flex items-center justify-center">
                <h2 class="text-4xl text-white font-bold italic">Welcome Admin</h2>
            </div>

        </div>

</body>
</html>

