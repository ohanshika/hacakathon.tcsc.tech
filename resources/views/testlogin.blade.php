<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Tailwind CSS CDN -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/testlogin.css">
    <!-- Optional: Include Font Awesome for Icons -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    />
</head>
<header class="absolute inset-y-10 left-10 h-2 text-white tracking-widest header">Hackathon<sup class="ml-2">TCSC</sup></header>
<body class="mainbody flex items-center justify-center min-h-screen bg-no-repeat bg-cover">
    <div class="bg-white p-12 rounded-lg w-full max-w-md login_layout border-solid border-2 border-sky-500 login_layout_fade">
        <h2 class="text-3xl font-extrabold mb-10 text-center text-white">Test Login</h2>

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
                <label for="leader_name" class="block text-white font-semibold mb-2"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;&nbsp;Leader Name</label>
                <input type="text" id="leader_name" name="leader_name" required
                    class="leaderinp w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-500"
                    placeholder="Enter your leader name">
            </div>
            <!-- Group ID Field -->
            <div>
                <label for="group_id" class="block text-white font-semibold mb-2"><i class="fa-solid fa-id-card"></i>&nbsp;&nbsp;&nbsp;Group ID</label>
                <input type="text" id="group_id" name="group_id" required
                    class="groupinp w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition duration-500"
                    placeholder="Enter your group ID">
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="btn w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 shadow-lg transition duration-300 font-mono">
                    <i class="fa-solid fa-right-to-bracket mr-2"></i> Start
                </button>
            </div>
        </form>
    </div>
</body>

</html>