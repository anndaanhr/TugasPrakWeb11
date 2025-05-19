<?php
session_start();
if (isset($_SESSION['username'])) {
    // Jika sudah login, alihkan ke home.php
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - MyApp</title>
</head>
<body class="flex flex-col min-h-screen bg-gradient-to-br from-blue-100 via-white to-blue-50">
    <header class="w-full bg-blue-600 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="text-white text-2xl font-bold tracking-tight">MyApp</a>
                </div>
                <div>
                    <a href="about.php" class="text-white text-sm font-medium hover:underline">About</a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center px-4">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login</h2>
            <?php if (isset($_GET['error'])): ?>
                <p class="text-red-500 text-center mb-4"><?php echo htmlspecialchars($_GET['error']); ?></p>
            <?php endif; ?>
            <form method="POST" action="process_login.php" class="space-y-4">
                <div>
                    <input 
                        name="username" 
                        type="text" 
                        placeholder="Masukkan Username" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required 
                    />
                </div>
                <div>
                    <input 
                        name="password" 
                        type="password" 
                        placeholder="Masukkan Password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required 
                    />
                </div>
                <div>
                    <button 
                        type="submit" 
                        class="w-full px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition-colors duration-200"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </main>

    <footer class="w-full bg-gray-800 text-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm">© 2025 MyApp. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>