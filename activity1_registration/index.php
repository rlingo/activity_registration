<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <form id="registrationForm">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <script>
        // Function to handle form submission
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Get user input
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Create a user object
            var user = {
                username: username,
                email: email,
                password: password
            };

            // Check if local storage is available
            if (typeof (Storage) !== "undefined") {
                // Retrieve existing users from local storage
                var users = JSON.parse(localStorage.getItem('users')) || [];
                // Add the new user
                users.push(user);
                // Store the updated user data
                localStorage.setItem('users', JSON.stringify(users));
                alert('Registration successful.');
                // Reset the form
                document.getElementById('registrationForm').reset();
            } else {
                alert('Local storage is not available in your browser. User data cannot be stored.');
            }
        });
    </script>
</body>

</html>