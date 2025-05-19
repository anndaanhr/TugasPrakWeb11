<?php
session_start();
$username = "";
if(isset($_SESSION['username'])){
    //sudah login, set username ke session
    $username = $_SESSION['username'];
}else{
    //tidak login, redirect ke index.php
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome Page</title>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-50">
    <!-- Navbar -->
    <nav class="w-full bg-blue-600 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="text-white text-2xl font-bold tracking-tight">MyApp</a>
                </div>
                <div>
                    <a href="logout.php" 
                       class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md transition-colors duration-200">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center px-4">
        <div class="text-center">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-gray-800 tracking-tight">
                Hello, <span class="text-blue-600"><?=$username?></span>!
            </h1>
            <p class="mt-4 text-lg text-gray-600">
                Welcome back to your dashboard. Ready to explore?
            </p>
            <a href="#" 
               class="mt-6 inline-block px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition-colors duration-200">
                Get Started
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm">&copy; 2025 MyApp. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>