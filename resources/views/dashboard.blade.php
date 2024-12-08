<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participants Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center p-4">
        <h1 class="text-3xl font-bold mb-6">Participants Dashboard</h1>

        <div class="bg-gray-800 rounded-lg shadow-lg p-6 w-full max-w-5xl">
            <table class="w-full table-auto border-collapse border border-gray-700">
                <thead>
                    <tr class="bg-gray-700 text-gray-100">
                        <th class="border border-gray-600 px-4 py-2">#</th>
                        <th class="border border-gray-600 px-4 py-2">College Name</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Name</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Class</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Roll No</th>
                        <th class="border border-gray-600 px-4 py-2">Transaction ID</th>
                        <th class="border border-gray-600 px-4 py-2">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($participants as $participant)
                        <tr class="hover:bg-gray-700">
                            <td class="border border-gray-600 px-4 py-2 text-center">{{ $participant->Group_id }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->college_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_class }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->transaction_id }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="border border-gray-600 px-4 py-2 text-center">
                                No participants found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>