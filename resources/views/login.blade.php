<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Optional: Include Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQkTyjhFg+U4XxI1XPHqfv7dNcOKQhFFQOtBlAwf6SUrTVRlyZKkVNs8HkIwv+14h4mQrwL1qZsVbN7dA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Admin Login</h2>
        
        <!-- Alert Popups -->
        @if(session('error'))
        <div id="popup-error" class="p-4 mb-4 text-red-800 bg-red-100 border border-red-300 rounded-lg" role="alert">
            <span class="font-medium">Error!</span> {{ session('error') }}
        </div>
        @endif

        <!-- Login Form -->
        <form id="login-form" action="{{ url('/login') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Username Field -->
            <div>
                <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your username"
                >
            </div>
            <!-- Password Field -->
            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Enter your password"
                >
            </div>
            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-300"
                >
                    <i class="fas fa-sign-in-alt mr-2"></i> Submit
                </button>
            </div>
        </form>
    </div>
</body>
</html>
