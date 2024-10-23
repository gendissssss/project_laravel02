<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center h-screen">

    <!-- Login Form Container -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-80">
        <form action="#" method="POST">
            <!-- Username Input -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="username">Username :</label>
                <input class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-300" type="text" id="username" name="username" placeholder="Enter your username">
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2" for="password">Password :</label>
                <input class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-300" type="password" id="password" name="password" placeholder="Enter your password">
            </div>

            <!-- Submit Button -->
            <div>
                <button class="w-full g-sky-200 text-white py-2 rounded-md hover:bg-sky-200 transition-colors">LOGIN</button>
            </div>
        </form>
    </div>

</body>
</html>