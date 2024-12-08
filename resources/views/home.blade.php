<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-gray-100">
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 rounded-lg shadow-lg p-6 w-full max-w-4xl">
            <h1 class="text-3xl font-bold text-center mb-6">Hackathon Registration</h1>
            <form action="{{url('/register')}}" method="POST" id="multiStepForm">
                @csrf
                <!-- Section 1 -->
                <div class="form-section active">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="collegeName" class="block text-sm font-medium">College Name</label>
                            <input type="text" id="collegeName" name="collegeName"
                                class="w-full mt-1 p-2 bg-gray-700 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="leaderName" class="block text-sm font-medium">Leader Name</label>
                            <input type="text" id="leaderName" name="leaderName"
                                class="w-full mt-1 p-2 bg-gray-700 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="class" class="block text-sm font-medium">Class</label>
                            <input type="text" id="class" name="leaderclass" class="w-full mt-1 p-2 bg-gray-700 rounded"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="rollNo" class="block text-sm font-medium">Roll No</label>
                            <input type="text" id="rollNo" name="leaderrollNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="phoneNo" class="block text-sm font-medium">Phone No</label>
                            <input type="tel" id="phoneNo" name="leaderphoneNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium">Email</label>
                            <input type="email" id="email" name="leaderemail"
                                class="w-full mt-1 p-2 bg-gray-700 rounded" required>
                        </div>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded"
                            onclick="validateAndNext()">Next</button>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="form-section hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="member1Name" class="block text-sm font-medium">Member 1 Name</label>
                            <input type="text" id="member1Name" name="member1Name"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1Class" class="block text-sm font-medium">Class</label>
                            <input type="text" id="member1Class" name="member1Class"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1RollNo" class="block text-sm font-medium">Roll No</label>
                            <input type="text" id="member1RollNo" name="member1RollNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1PhoneNo" class="block text-sm font-medium">Phone No</label>
                            <input type="tel" id="member1PhoneNo" name="member1PhoneNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1Email" class="block text-sm font-medium">Email</label>
                            <input type="email" id="member1Email" name="member1Email"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded"
                            onclick="previousSection()">Back</button>
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded"
                            onclick="nextSection()">Next</button>
                    </div>
                </div>

                <!-- Section 3, Section 4 (Repeat similar to Section 2 for other members) -->
                <div class="form-section hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="member1Name" class="block text-sm font-medium">Member 2 Name</label>
                            <input type="text" id="member2Name" name="member2Name"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1Class" class="block text-sm font-medium">Class</label>
                            <input type="text" id="member2Class" name="member2Class"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1RollNo" class="block text-sm font-medium">Roll No</label>
                            <input type="text" id="member2RollNo" name="member2RollNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1PhoneNo" class="block text-sm font-medium">Phone No</label>
                            <input type="tel" id="member2PhoneNo" name="member2PhoneNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1Email" class="block text-sm font-medium">Email</label>
                            <input type="email" id="member2Email" name="member2Email"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded"
                            onclick="previousSection()">Back</button>
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded"
                            onclick="nextSection()">Next</button>
                    </div>
                </div>

                <div class="form-section hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="member1Name" class="block text-sm font-medium">Member 3 Name</label>
                            <input type="text" id="member3Name" name="member3Name"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member3Class" class="block text-sm font-medium">Class</label>
                            <input type="text" id="member1Class" name="member3Class"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1RollNo" class="block text-sm font-medium">Roll No</label>
                            <input type="text" id="member1RollNo" name="member3RollNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1PhoneNo" class="block text-sm font-medium">Phone No</label>
                            <input type="tel" id="member1PhoneNo" name="member3PhoneNo"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="member1Email" class="block text-sm font-medium">Email</label>
                            <input type="email" id="member1Email" name="member3Email"
                                class="w-full mt-1 p-2 bg-gray-700 rounded">
                        </div>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded"
                            onclick="previousSection()">Back</button>
                        <button type="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded"
                            onclick="nextSection()">Next</button>
                    </div>
                </div>


                <!-- Section 5 -->
                <div class="form-section hidden">
                    <div class="mb-4">
                        <img src="https://via.placeholder.com/400x200" alt="Hackathon" class="rounded-lg w-full">
                    </div>
                    <div class="mb-4">
                        <label for="transactionId" class="block text-sm font-medium">Transaction ID</label>
                        <input type="text" id="transactionId" name="transactionId"
                            class="w-full mt-1 p-2 bg-gray-700 rounded" required>
                    </div>
                    <div class="flex justify-between space-x-2">
                        <button type="button" class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded"
                            onclick="previousSection()">Back</button>
                        <button type="submit"
                            class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        const sections = document.querySelectorAll('.form-section');
        let currentSection = 0;

        function showSection(index) {
            sections.forEach((section, i) => {
                section.classList.toggle('hidden', i !== index);
                section.classList.toggle('active', i === index);
            });
        }

        function nextSection() {
            if (currentSection < sections.length - 1) {
                currentSection++;
                showSection(currentSection);
            }
        }

        function previousSection() {
            if (currentSection > 0) {
                currentSection--;
                showSection(currentSection);
            }
        }

        function validateAndNext() {
            const inputs = sections[currentSection].querySelectorAll('input[required]');
            for (let input of inputs) {
                if (!input.value) {
                    alert('Please fill all required fields before proceeding.');
                    return;
                }
            }
            nextSection();
        }

        showSection(currentSection);
    </script>
</body>

</html>