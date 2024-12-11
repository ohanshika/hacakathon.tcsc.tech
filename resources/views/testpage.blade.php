<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Section Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .section {
            display: none;
            animation: fadeIn 0.3s ease-in-out;
        }

        .section.active {
            display: block;
        }

        p {
            font-size: 18px;
            font-weight: 500;
        }

        label {
            display: block;
            margin: 10px 0;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .navigation {
            margin-top: 20px;
            text-align: center;
        }

        .navigation button {
            padding: 12px 25px;
            margin: 0 10px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .navigation button:hover {
            background-color: #0056b3;
        }

        button:disabled {
            background-color: #cccccc;
            cursor: not-allowed;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <h1>Multi-Section Form</h1>
    <form action="{{url('/submittest')}}" method="post" id="multiSectionForm">
        @csrf
        <!-- Generate 20 sections -->
        <div id="answer1" class="section active">
            <p>Question 1: What is your favorite color?</p>
            <input type="radio" name="answer1" value="null" checked hidden>
            <label><input type="radio" name="answer1" value="Red"> Red</label>
            <label><input type="radio" name="answer1" value="Blue"> Blue</label>
            <label><input type="radio" name="answer1" value="Green"> Green</label>
            <label><input type="radio" name="answer1" value="Yellow"> Yellow</label>
        </div>

        <div id="answer2" class="section">
            <p>Question 2: What is your favorite animal?</p>
            <input type="radio" name="answer2" value="null" checked hidden>
            <label><input type="radio" name="answer2" value="Dog"> Dog</label>
            <label><input type="radio" name="answer2" value="Cat"> Cat</label>
            <label><input type="radio" name="answer2" value="Bird"> Bird</label>
            <label><input type="radio" name="answer2" value="Fish"> Fish</label>
        </div>

        <div id="answer3" class="section">
            <p>Question 3: What is your favorite animal?</p>
            <input type="radio" name="answer3" value="null" checked hidden>
            <label><input type="radio" name="answer3" value="Dog"> Dog</label>
            <label><input type="radio" name="answer3" value="Cat"> Cat</label>
            <label><input type="radio" name="answer3" value="Bird"> Bird</label>
            <label><input type="radio" name="answer3" value="Fish"> Fish</label>
        </div>

        <div id="answer4" class="section">
            <p>Question 4: What is your favorite animal?</p>
            <input type="radio" name="answer4" value="null" checked hidden>
            <label><input type="radio" name="answer4" value="Dog"> Dog</label>
            <label><input type="radio" name="answer4" value="Cat"> Cat</label>
            <label><input type="radio" name="answer4" value="Bird"> Bird</label>
            <label><input type="radio" name="answer4" value="Fish"> Fish</label>
        </div>

        <div id="answer5" class="section">
            <p>Question 5: What is your favorite animal?</p>
            <input type="radio" name="answer5" value="null" checked hidden>
            <label><input type="radio" name="answer5" value="Dog"> Dog</label>
            <label><input type="radio" name="answer5" value="Cat"> Cat</label>
            <label><input type="radio" name="answer5" value="Bird"> Bird</label>
            <label><input type="radio" name="answer5" value="Fish"> Fish</label>
        </div>

        <div id="answer6" class="section">
            <p>Question 6: What is your favorite animal?</p>
            <input type="radio" name="answer6" value="null" checked hidden>
            <label><input type="radio" name="answer6" value="Dog"> Dog</label>
            <label><input type="radio" name="answer6" value="Cat"> Cat</label>
            <label><input type="radio" name="answer6" value="Bird"> Bird</label>
            <label><input type="radio" name="answer6" value="Fish"> Fish</label>
        </div>

        <div id="answer7" class="section">
            <p>Question 7: What is your favorite animal?</p>
            <input type="radio" name="answer7" value="null" checked hidden>
            <label><input type="radio" name="answer7" value="Dog"> Dog</label>
            <label><input type="radio" name="answer7" value="Cat"> Cat</label>
            <label><input type="radio" name="answer7" value="Bird"> Bird</label>
            <label><input type="radio" name="answer7" value="Fish"> Fish</label>
        </div>

        <div id="answer8" class="section">
            <p>Question 8: What is your favorite animal?</p>
            <input type="radio" name="answer8" value="null" checked hidden>
            <label><input type="radio" name="answer8" value="Dog"> Dog</label>
            <label><input type="radio" name="answer8" value="Cat"> Cat</label>
            <label><input type="radio" name="answer8" value="Bird"> Bird</label>
            <label><input type="radio" name="answer8" value="Fish"> Fish</label>
        </div>

        <div id="answer9" class="section">
            <p>Question 9: What is your favorite animal?</p>
            <input type="radio" name="answer9" value="null" checked hidden>
            <label><input type="radio" name="answer9" value="Dog"> Dog</label>
            <label><input type="radio" name="answer9" value="Cat"> Cat</label>
            <label><input type="radio" name="answer9" value="Bird"> Bird</label>
            <label><input type="radio" name="answer9" value="Fish"> Fish</label>
        </div>

        <div id="answer10" class="section">
            <p>Question 10: What is your favorite animal?</p>
            <input type="radio" name="answer9" value="null" checked hidden>
            <label><input type="radio" name="answer10" value="Dog"> Dog</label>
            <label><input type="radio" name="answer10" value="Cat"> Cat</label>
            <label><input type="radio" name="answer10" value="Bird"> Bird</label>
            <label><input type="radio" name="answer10" value="Fish"> Fish</label>
        </div>
        <div id="answer11" class="section">
            <p>Question 11: What is your favorite animal?</p>
            <input type="radio" name="answer11" value="null" checked hidden>
            <label><input type="radio" name="answer11" value="Dog"> Dog</label>
            <label><input type="radio" name="answer11" value="Cat"> Cat</label>
            <label><input type="radio" name="answer11" value="Bird"> Bird</label>
            <label><input type="radio" name="answer11" value="Fish"> Fish</label>
        </div>
        <div id="answer12" class="section">
            <p>Question 12: What is your favorite animal?</p>
            <input type="radio" name="answer12" value="null" checked hidden>
            <label><input type="radio" name="answer12" value="Dog"> Dog</label>
            <label><input type="radio" name="answer12" value="Cat"> Cat</label>
            <label><input type="radio" name="answer12" value="Bird"> Bird</label>
            <label><input type="radio" name="answer12" value="Fish"> Fish</label>
        </div>
        <div id="answer13" class="section">
            <p>Question 13: What is your favorite animal?</p>
            <input type="radio" name="answer13" value="null" checked hidden>
            <label><input type="radio" name="answer13" value="Dog"> Dog</label>
            <label><input type="radio" name="answer13" value="Cat"> Cat</label>
            <label><input type="radio" name="answer13" value="Bird"> Bird</label>
            <label><input type="radio" name="answer13" value="Fish"> Fish</label>
        </div>
        <div id="answer14" class="section">
            <p>Question 14: What is your favorite animal?</p>
            <input type="radio" name="answer14" value="null" checked hidden>
            <label><input type="radio" name="answer14" value="Dog"> Dog</label>
            <label><input type="radio" name="answer14" value="Cat"> Cat</label>
            <label><input type="radio" name="answer14" value="Bird"> Bird</label>
            <label><input type="radio" name="answer14" value="Fish"> Fish</label>
        </div>
        <div id="answer15" class="section">
            <p>Question 15: What is your favorite animal?</p>
            <input type="radio" name="answer15" value="null" checked hidden>
            <label><input type="radio" name="answer15" value="Dog"> Dog</label>
            <label><input type="radio" name="answer15" value="Cat"> Cat</label>
            <label><input type="radio" name="answer15" value="Bird"> Bird</label>
            <label><input type="radio" name="answer15" value="Fish"> Fish</label>
        </div>
        <div id="answer16" class="section">
            <p>Question 16: What is your favorite animal?</p>
            <input type="radio" name="answer16" value="null" checked hidden>
            <label><input type="radio" name="answer16" value="Dog"> Dog</label>
            <label><input type="radio" name="answer16" value="Cat"> Cat</label>
            <label><input type="radio" name="answer16" value="Bird"> Bird</label>
            <label><input type="radio" name="answer16" value="Fish"> Fish</label>
        </div>
        <div id="answer17" class="section">
            <p>Question 17: What is your favorite animal?</p>
            <input type="radio" name="answer17" value="null" checked hidden>
            <label><input type="radio" name="answer17" value="Dog"> Dog</label>
            <label><input type="radio" name="answer17" value="Cat"> Cat</label>
            <label><input type="radio" name="answer17" value="Bird"> Bird</label>
            <label><input type="radio" name="answer17" value="Fish"> Fish</label>
        </div>
        <div id="answer18" class="section">
            <p>Question 18: What is your favorite animal?</p>
            <input type="radio" name="answer18" value="null" checked hidden>
            <label><input type="radio" name="answer18" value="Dog"> Dog</label>
            <label><input type="radio" name="answer18" value="Cat"> Cat</label>
            <label><input type="radio" name="answer18" value="Bird"> Bird</label>
            <label><input type="radio" name="answer18" value="Fish"> Fish</label>
        </div>
        <div id="answer19" class="section">
            <p>Question 19: What is your favorite animal?</p>
            <input type="radio" name="answer19" value="null" checked hidden>
            <label><input type="radio" name="answer19" value="Dog"> Dog</label>
            <label><input type="radio" name="answer19" value="Cat"> Cat</label>
            <label><input type="radio" name="answer19" value="Bird"> Bird</label>
            <label><input type="radio" name="answer19" value="Fish"> Fish</label>
        </div>
        <!-- Add more questions here (up to 20) -->
        <div id="answer20" class="section">
            <p>Question 20: What is your favorite fruit?</p>
            <input type="radio" name="answer20" value="null" checked hidden>
            <label><input type="radio" name="answer20" value="Apple"> Apple</label>
            <label><input type="radio" name="answer20" value="Banana"> Banana</label>
            <label><input type="radio" name="answer20" value="Orange"> Orange</label>
            <label><input type="radio" name="answer20" value="Grapes"> Grapes</label>
        </div>

        <div class="navigation">
            <button type="button" id="prevBtn" disabled>Previous</button>
            <button type="button" id="nextBtn">Next</button>
            <button type="submit" id="submitBtn" style="display: none;">Submit</button>
        </div>
    </form>

    <script>
        let currentSectionIndex = 0;
        const sections = document.querySelectorAll('.section');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');

        function showSection(index) {
            sections.forEach((section, i) => {
                section.classList.toggle('active', i === index);
            });
            // Enable or disable buttons based on the current index
            prevBtn.disabled = index === 0;
            nextBtn.style.display = index === sections.length - 1 ? 'none' : 'inline-block';
            submitBtn.style.display = index === sections.length - 1 ? 'inline-block' : 'none';
        }

        prevBtn.addEventListener('click', () => {
            if (currentSectionIndex > 0) {
                currentSectionIndex--;
                showSection(currentSectionIndex);
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentSectionIndex < sections.length - 1) {
                currentSectionIndex++;
                showSection(currentSectionIndex);
            }
        });

        // Initialize the first section as active
        showSection(currentSectionIndex);
    </script>
</body>

</html>