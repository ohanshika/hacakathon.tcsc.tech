<style>
    /* Body and Background Styling */
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        font-family: 'Roboto', sans-serif;
        position: relative;
    }

    /* Background Image Styling with additional overlay */
    .background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('https://img.freepik.com/free-vector/gradient-connection-background_23-2150462053.jpg') no-repeat center center/cover;
        filter: brightness(50%);
        /* Dim the image */
        z-index: -1;
    }

    /* Overlay to increase form contrast */
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Dark overlay for contrast */
        z-index: -1;
    }

    /* Form Styling */
    .form {
        background-color: rgba(28, 28, 45, 0.85);
        /* Semi-transparent background */
        border-radius: 20px;
        padding: 40px 40px;
        width: 400px;
        height: 420px;
        /* Increased height for better space */
        box-sizing: border-box;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .form:hover {
        transform: scale(1.05);
    }

    /* Title and Subtitle */
    .title {
        color: #fff;
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 20px;
        text-align: center;
    }

    .subtitle {
        color: #aaa;
        font-size: 16px;
        text-align: center;
        margin-bottom: 30px;
    }

    /* Input Field Styling */
    .input-container {
        position: relative;
        margin-bottom: 20px;
    }

    .input {
        width: 100%;
        padding: 12px 20px;
        background-color: #2c2c3d;
        border-radius: 8px;
        border: 2px solid transparent;
        color: #fff;
        font-size: 16px;
        box-sizing: border-box;
        outline: none;
        transition: all 0.3s ease;
    }

    .input:focus {
        border-color: #8f94fb;
        background-color: #3a3a4d;
        box-shadow: 0 0 10px rgba(143, 148, 251, 0.5);
    }

    /* Floating Label Styling */
    .placeholder {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
        font-size: 16px;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .input:focus~.placeholder,
    .input:not(:placeholder-shown)~.placeholder {
        top: -10px;
        font-size: 14px;
        color: #8f94fb;
    }

    /* Submit Button Styling */
    .submit {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        /* Blue color */
        border-radius: 8px;
        border: none;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .submit:hover {
        background-color: #0056b3;
        /* Darker blue for hover */
        transform: translateY(-2px);
        /* Hover effect */
    }

    .submit:active {
        background-color: #007bff;
        transform: translateY(2px);
        /* Active effect */
    }

    /* Responsive Design */
    @media (max-width: 600px) {
        .form {
            width: 90%;
            padding: 20px;
        }

        .title {
            font-size: 28px;
        }

        .subtitle {
            font-size: 14px;
        }

        .input {
            font-size: 14px;
            padding: 10px;
        }

        .submit {
            font-size: 16px;
            padding: 10px;
        }
    }
</style>


<body>
    <div class="background"></div> <!-- Background image with opacity -->
    <div class="overlay"></div> <!-- Dark overlay for contrast -->
    <form class="form" action="{{url('/login')}}" method="POST">
        @csrf
        <div class="title">Admin Login</div>
        <div class="subtitle">Please enter your credentials</div>

        @if ($errors->has('login'))
            <div class="error-message">
                {{ $errors->first('login') }}
            </div>
        @endif

        <!-- Username Field -->
        <div class="input-container">
            <input id="username" class="input" type="text" name="username" placeholder=" " required />
            <div class="placeholder">Username</div>
        </div>

        <!-- Password Field -->
        <div class="input-container">
            <input id="password" class="input" type="password" name="password" placeholder=" " required />
            <div class="placeholder">Password</div>
        </div>

        <!-- Submit Button -->
        <input type="submit" class="submit">
    </form>
</body>

</html>