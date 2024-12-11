<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Optional: Include Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrQkTyjhFg+U4XxI1XPHqfv7dNcOKQhFFQOtBlAwf6SUrTVRlyZKkVNs8HkIwv+14h4mQrwL1qZsVbN7dA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gradient-to-r from-blue-200 via-indigo-300 to-purple-400 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-md">
        <h2 class="text-3xl font-extrabold mb-6 text-center text-gray-900">Test Login</h2>

        <!-- Alert Popups -->
        @if(session('error'))
            <div id="popup-error" class="p-4 mb-4 text-red-800 bg-red-100 border border-red-300 rounded-lg" role="alert">
                <span class="font-medium">Error!</span> {{ session('error') }}
            </div>
        @endif

        <!-- Login Form -->
        <form id="login-form" action="{{ url('/testlogin') }}" method="POST" class="space-y-6">
            @csrf
            <!-- Leader Name Field -->
            <div>
                <label for="leader_name" class="block text-gray-700 font-semibold mb-2">Leader Name</label>
                <input type="text" id="leader_name" name="leader_name" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                    placeholder="Enter your leader name">
            </div>
            <!-- Group ID Field -->
            <div>
                <label for="group_id" class="block text-gray-700 font-semibold mb-2">Group ID</label>
                <input type="text" id="group_id" name="group_id" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-300"
                    placeholder="Enter your group ID">
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 shadow-lg transition duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i> Start Ts
                </button>
            </div>
        </form>
    </div>
</body>

</html>