<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aptitude Test Form</title>
    <link rel="stylesheet" href="/css/testpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<header class="absolute inset-y-10 left-10 h-2 text-white tracking-widest header">Aptitude Test<sup
        class="ml-2">TCSC</sup></header>

<body>
    <div class="mainlayout">
        <h1><i class="fa-solid fa-brain text-5xl p-5 mb-4 animate-pulse"></i></h1>
        <form action="{{url('/submittest')}}" method="post" id="multiSectionForm">
            @csrf
            <!-- New Aptitude Questions -->
            <div id="question1" class="section active">
                <p>Question 1: If a train travels 60 km in 1 hour, how far will it travel in 4 hours?</p>
                <input type="radio" name="question1" value="null" checked hidden>
                <label><input type="radio" name="question1" value="240"> 240 km</label>
                <label><input type="radio" name="question1" value="180"> 180 km</label>
                <label><input type="radio" name="question1" value="300"> 300 km</label>
                <label><input type="radio" name="question1" value="60"> 60 km</label>
            </div>

            <div id="question2" class="section">
                <p>Question 2: What is the next number in the series: 2, 4, 8, 16, ...?</p>
                <input type="radio" name="question2" value="null" checked hidden>
                <label><input type="radio" name="question2" value="32"> 32</label>
                <label><input type="radio" name="question2" value="20"> 20</label>
                <label><input type="radio" name="question2" value="64"> 64</label>
                <label><input type="radio" name="question2" value="24"> 24</label>
            </div>

            <div id="question3" class="section">
                <p>Question 3: A clock shows 3:15. What is the angle between the hour and minute hands?</p>
                <input type="radio" name="question3" value="null" checked hidden>
                <label><input type="radio" name="question3" value="7.5"> 7.5 degrees</label>
                <label><input type="radio" name="question3" value="0"> 0 degrees</label>
                <label><input type="radio" name="question3" value="45"> 45 degrees</label>
                <label><input type="radio" name="question3" value="90"> 90 degrees</label>
            </div>

            <div id="question4" class="section">
                <p>Question 4: A box contains 4 red balls, 5 green balls, and 6 blue balls. If one ball is drawn at
                    random, what is the probability it is green?</p>
                <input type="radio" name="question4" value="null" checked hidden>
                <label><input type="radio" name="question4" value="5/15"> 5/15</label>
                <label><input type="radio" name="question4" value="1/3"> 1/3</label>
                <label><input type="radio" name="question4" value="5/10"> 5/10</label>
                <label><input type="radio" name="question4" value="2/3"> 2/3</label>
            </div>

            <div id="question5" class="section">
                <p>Question 5: If the perimeter of a square is 24 cm, what is the length of each side?</p>
                <input type="radio" name="question5" value="null" checked hidden>
                <label><input type="radio" name="question5" value="6"> 6 cm</label>
                <label><input type="radio" name="question5" value="8"> 8 cm</label>
                <label><input type="radio" name="question5" value="10"> 10 cm</label>
                <label><input type="radio" name="question5" value="12"> 12 cm</label>
            </div>

            <div id="question6" class="section">
                <p>Question 6: If 3 pens cost $15, how much do 7 pens cost?</p>
                <input type="radio" name="question6" value="null" checked hidden>
                <label><input type="radio" name="question6" value="35"> $35</label>
                <label><input type="radio" name="question6" value="30"> $30</label>
                <label><input type="radio" name="question6" value="25"> $25</label>
                <label><input type="radio" name="question6" value="40"> $40</label>
            </div>

            <div id="question7" class="section">
                <p>Question 7: What is the square root of 144?</p>
                <input type="radio" name="question7" value="null" checked hidden>
                <label><input type="radio" name="question7" value="12"> 12</label>
                <label><input type="radio" name="question7" value="14"> 14</label>
                <label><input type="radio" name="question7" value="16"> 16</label>
                <label><input type="radio" name="question7" value="10"> 10</label>
            </div>

            <div id="question8" class="section">
                <p>Question 8: Which of the following is a prime number?</p>
                <input type="radio" name="question8" value="null" checked hidden>
                <label><input type="radio" name="question8" value="29"> 29</label>
                <label><input type="radio" name="question8" value="28"> 28</label>
                <label><input type="radio" name="question8" value="30"> 30</label>
                <label><input type="radio" name="question8" value="32"> 32</label>
            </div>

            <div id="question9" class="section">
                <p>Question 9: Solve: 15 + 25 - 10 = ?</p>
                <input type="radio" name="question9" value="null" checked hidden>
                <label><input type="radio" name="question9" value="30"> 30</label>
                <label><input type="radio" name="question9" value="35"> 35</label>
                <label><input type="radio" name="question9" value="40"> 40</label>
                <label><input type="radio" name="question9" value="25"> 25</label>
            </div>

            <div id="question10" class="section">
                <p>Question 10: What is 20% of 200?</p>
                <input type="radio" name="question10" value="null" checked hidden>
                <label><input type="radio" name="question10" value="40"> 40</label>
                <label><input type="radio" name="question10" value="50"> 50</label>
                <label><input type="radio" name="question10" value="30"> 30</label>
                <label><input type="radio" name="question10" value="20"> 20</label>
            </div>

            <div id="question11" class="section">
                <p>Question 11: How many sides does a hexagon have?</p>
                <input type="radio" name="question11" value="null" checked hidden>
                <label><input type="radio" name="question11" value="6"> 6</label>
                <label><input type="radio" name="question11" value="5"> 5</label>
                <label><input type="radio" name="question11" value="8"> 8</label>
                <label><input type="radio" name="question11" value="7"> 7</label>
            </div>

            <div id="question12" class="section">
                <p>Question 12: What is the smallest prime number?</p>
                <input type="radio" name="question12" value="null" checked hidden>
                <label><input type="radio" name="question12" value="2"> 2</label>
                <label><input type="radio" name="question12" value="3"> 3</label>
                <label><input type="radio" name="question12" value="1"> 1</label>
                <label><input type="radio" name="question12" value="5"> 5</label>
            </div>

            <div id="question13" class="section">
                <p>Question 13: Which is the largest planet in our solar system?</p>
                <input type="radio" name="question13" value="null" checked hidden>
                <label><input type="radio" name="question13" value="Jupiter"> Jupiter</label>
                <label><input type="radio" name="question13" value="Saturn"> Saturn</label>
                <label><input type="radio" name="question13" value="Earth"> Earth</label>
                <label><input type="radio" name="question13" value="Mars"> Mars</label>
            </div>

            <div id="question14" class="section">
                <p>Question 14: What is 7 * 8?</p>
                <input type="radio" name="question14" value="null" checked hidden>
                <label><input type="radio" name="question14" value="56"> 56</label>
                <label><input type="radio" name="question14" value="54"> 54</label>
                <label><input type="radio" name="question14" value="60"> 60</label>
                <label><input type="radio" name="question14" value="49"> 49</label>
            </div>

            <div id="question15" class="section">
                <p>Question 15: What is the capital of France?</p>
                <input type="radio" name="question15" value="null" checked hidden>
                <label><input type="radio" name="question15" value="Paris"> Paris</label>
                <label><input type="radio" name="question15" value="London"> London</label>
                <label><input type="radio" name="question15" value="Rome"> Rome</label>
                <label><input type="radio" name="question15" value="Berlin"> Berlin</label>
            </div>

            <div id="question16" class="section">
                <p>Question 16: Solve: 81 / 9 = ?</p>
                <input type="radio" name="question16" value="null" checked hidden>
                <label><input type="radio" name="question16" value="9"> 9</label>
                <label><input type="radio" name="question16" value="8"> 8</label>
                <label><input type="radio" name="question16" value="7"> 7</label>
                <label><input type="radio" name="question16" value="10"> 10</label>
            </div>

            <div id="question17" class="section">
                <p>Question 17: What is the boiling point of water in Celsius?</p>
                <input type="radio" name="question17" value="null" checked hidden>
                <label><input type="radio" name="question17" value="100"> 100</label>
                <label><input type="radio" name="question17" value="90"> 90</label>
                <label><input type="radio" name="question17" value="110"> 110</label>
                <label><input type="radio" name="question17" value="80"> 80</label>
            </div>

            <div id="question18" class="section">
                <p>Question 18: How many continents are there on Earth?</p>
                <input type="radio" name="question18" value="null" checked hidden>
                <label><input type="radio" name="question18" value="7"> 7</label>
                <label><input type="radio" name="question18" value="6"> 6</label>
                <label><input type="radio" name="question18" value="8"> 8</label>
                <label><input type="radio" name="question18" value="5"> 5</label>
            </div>

            <div id="question19" class="section">
                <p>Question 19: Solve: 45 - 15 + 10 = ?</p>
                <input type="radio" name="question19" value="null" checked hidden>
                <label><input type="radio" name="question19" value="40"> 40</label>
                <label><input type="radio" name="question19" value="50"> 50</label>
                <label><input type="radio" name="question19" value="35"> 35</label>
                <label><input type="radio" name="question19" value="30"> 30</label>
            </div>

            <div id="question20" class="section">
                <p>Question 20: What is the chemical symbol for water?</p>
                <input type="radio" name="question20" value="null" checked hidden>
                <label><input type="radio" name="question20" value="H2O"> H2O</label>
                <label><input type="radio" name="question20" value="O2"> O2</label>
                <label><input type="radio" name="question20" value="CO2"> CO2</label>
                <label><input type="radio" name="question20" value="HO"> HO</label>
            </div>

            <div class="navigation">
                <button type="button" id="prevBtn" disabled>Previous</button>
                <button type="button" id="nextBtn">Next</button>
                <button type="submit" id="submitBtn" style="display: none;">Submit</button>
            </div>
        </form>
    </div>

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