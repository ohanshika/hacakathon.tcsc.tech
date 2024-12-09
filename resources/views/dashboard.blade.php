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

        <div class="bg-gray-800 rounded-lg shadow-lg p-6 w-full max-w-7xl overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-700 text-sm">
                <thead>
                    <tr class="bg-gray-700 text-gray-100">
                        <th class="border border-gray-600 px-4 py-2">#</th>
                        <th class="border border-gray-600 px-4 py-2">College Name</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Name</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Class</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Roll No</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Phone No</th>
                        <th class="border border-gray-600 px-4 py-2">Leader Email</th>
                        <th class="border border-gray-600 px-4 py-2">Member 1 Name</th>
                        <th class="border border-gray-600 px-4 py-2">Member 1 Class</th>
                        <th class="border border-gray-600 px-4 py-2">Member 1 Roll No</th>
                        <th class="border border-gray-600 px-4 py-2">Member 1 Phone No</th>
                        <th class="border border-gray-600 px-4 py-2">Member 1 Email</th>
                        <th class="border border-gray-600 px-4 py-2">Member 2 Name</th>
                        <th class="border border-gray-600 px-4 py-2">Member 2 Class</th>
                        <th class="border border-gray-600 px-4 py-2">Member 2 Roll No</th>
                        <th class="border border-gray-600 px-4 py-2">Member 2 Phone No</th>
                        <th class="border border-gray-600 px-4 py-2">Member 2 Email</th>
                        <th class="border border-gray-600 px-4 py-2">Member 3 Name</th>
                        <th class="border border-gray-600 px-4 py-2">Member 3 Class</th>
                        <th class="border border-gray-600 px-4 py-2">Member 3 Roll No</th>
                        <th class="border border-gray-600 px-4 py-2">Member 3 Phone No</th>
                        <th class="border border-gray-600 px-4 py-2">Member 3 Email</th>
                        <th class="border border-gray-600 px-4 py-2">Transaction ID</th>
                        <th class="border border-gray-600 px-4 py-2">Created At</th>
                        <th class="border border-gray-600 px-4 py-2">Mail</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($participants as $participant)
                        <tr class="hover:bg-gray-700">
                            <td class="border border-gray-600 px-4 py-2 text-center">{{ $participant->Group_id }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->college_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_class }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_rollno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_phoneno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->leader_email }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member1_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member1_class }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member1_rollno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member1_phoneno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member1_email }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member2_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member2_class }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member2_rollno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member2_phoneno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member2_email }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member3_name }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member3_class }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member3_rollno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member3_phoneno }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->member3_email }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->transaction_id }}</td>
                            <td class="border border-gray-600 px-4 py-2">{{ $participant->created_at }}</td>
                            <td class="border border-gray-600 px-4 py-2">
                                <button
                                    class="{{ $participant->mail_sent ? 'bg-green-600 hover:bg-green-700' : 'bg-red-600 hover:bg-red-700' }} text-white px-4 py-2 rounded transition-colors">
                                    <a href="{{ url('registersuccess') }}?data={{ $participant }}">
                                        {{ $participant->mail_sent ? 'Verified' : 'Not Verified' }}
                                    </a>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="24" class="border border-gray-600 px-4 py-2 text-center">
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