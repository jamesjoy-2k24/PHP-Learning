<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pwd      = htmlspecialchars($_POST['pwd']);
    $age      = intval($_POST['age']);

    // Hash The Password 
    $hash_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    echo $username . '<br>' . $email . '<br>' . $age . '<br>' . $pwd . "<br>" . "Hash_pwd : " . $hash_pwd;
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <script src="tailwind.js"></script>
    </head>

    <body>
        <div class="form flex justify-center h-screen items-center bg-gray-900">
            <form action="" method="post" class="shadow-md shadow-white p-4 rounded-md w-[400px]">
                <h1 class="text-xl text-red-500 text-center font-bold">Welcome!</h1>
                <div class="flex flex-col gap-2 mt-4">
                    <label class="text-white font-semibold" for="username">Username</label>
                    <input
                        class="outline-none px-4 rounded-md text-white font-bold text-sm h-[30px] bg-white bg-opacity-20"
                        type="text" name="username" id="username" required>
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    <label class="text-white font-semibold" for="email">Email</label>
                    <input
                        class="outline-none px-4 rounded-md text-white font-bold text-sm h-[30px] bg-white bg-opacity-20"
                        type="email" name="email" id="email" required>
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    <label class="text-white font-semibold" for="pwd">Password</label>
                    <input
                        class="outline-none px-4 rounded-md text-white font-bold text-sm h-[30px] bg-white bg-opacity-20"
                        type="text" name="pwd" id="pwd" required>
                </div>

                <div class="flex flex-col gap-2 mt-4">
                    <label class="text-white font-semibold" for="age">Age</label>
                    <input
                        class="outline-none px-4 rounded-md text-white font-bold text-sm h-[30px] bg-white bg-opacity-20"
                        type="number" name="age" id="age" required>
                </div>

                <div class="flex gap-4 mt-4">
                    <input class="outline-none  w-[20px]" type="checkbox" id="subscribe" name="subscribe">
                    <label class="text-white font-semibold" for="subscribe">Subscribe</label>
                </div>
                <input class="text-white flex justify-center mx-auto px-6 rounded-md mt-4 shadow-sm shadow-white"
                    type="submit" value="submit">
            </form>
        </div>
    </body>

</html>