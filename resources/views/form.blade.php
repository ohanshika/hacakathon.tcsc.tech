<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script>
        function validatePasswords(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;

            if (password !== confirmPassword) {
                event.preventDefault(); // Prevent form submission
                alert("Passwords do not match. Please try again.");
                return false;
            }
            return true; // Allow form submission
        }
    </script> -->
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Customer Registration</h2>
    <form action="{{ route('customer.store') }}" method="POST" onsubmit="return validatePasswords(event);">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Name: *</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email: *</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label">Password: *</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="confirm_password" class="form-label">Confirm Password: *</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="country" class="form-label">Country:</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>
            <div class="col-md-6 mb-3">
                <label for="state" class="form-label">State:</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="2"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Gender:</label><br>
                <input type="radio" id="male" name="gender" value="male"> Male
                <input type="radio" id="female" name="gender" value="female"> Female
                <input type="radio" id="other" name="gender" value="other"> Other
            </div>
            <div class="col-md-6 mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
