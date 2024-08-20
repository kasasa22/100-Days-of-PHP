<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-sm bg-white rounded-lg shadow-md p-6">
        <?php
        include("../php/config.php");

        if (isset($_POST['submit'])){
            $Username = $_POST['name'];
            $Email = $_POST['email'];
            $Password = $_POST['password'];
            
        }

        //verify if email is unique
        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE email='$email'");

        if (mysqli_num_rows($verify_query) != 0){
            echo "
            <div class='message'>
            <p> Email already exists, please try again.</p>
            </div><br/>
            ";

            echo"<a href='javascript:self.history.back();><button type='button'>Back</button></a>";
        }else{
            mysqli_query($con,"INSERT INTO users(Username, Email, Password) VALUES($Username,$Email,$Password)")or die("Error in iserting values into database");
            echo "
            <div class='message'>
            <p>User sucessfully Registered</p>
            </div><br/>
            ";

            echo"<a href='javascript:self.history.back();><button type='button'>Back</button></a>";
        }

        ?>
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
        <form action="" method="post">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <div class="mb-6">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirm_password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
            </div>
            <button type="submit" class="w-full mt-6 bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
        </form>
        <p class="mt-6 text-center text-sm text-gray-600">Already have an account? <a href="login.php" class="text-blue-600 hover:underline">Login</a></p>
    </div>
</body>
</html>
