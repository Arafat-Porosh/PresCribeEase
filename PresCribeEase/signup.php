
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="signupStyle.css">
     
    <!-- Unicons Iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Simple Sign Up Form</title>

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('images/loginbackground.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        header {
            font-size: 1.5rem;
            font-weight: bold;
            color: #764ba2;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            margin-bottom: 1rem;
        }

        .input-field label {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .input-field input {
            padding: 0.8rem;
            font-size: 0.9rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            transition: border 0.3s ease;
        }

        .input-field input:focus {
            border-color: #764ba2;
        }

        .signUpBtn {
            width: 100%;
            padding: 0.8rem;
            font-size: 1rem;
            color: #fff;
            background-color: #764ba2;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .signUpBtn:hover {
            background-color: #5a3f8c;
        }

        .btnText {
            margin-left: 0.5rem;
        }

        /* Responsive Styles */
        @media (max-width: 400px) {
            .container {
                padding: 1.5rem;
            }

            .signUpBtn {
                font-size: 0.9rem;
                padding: 0.7rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>Sign Up</header>

        <form method="POST" action="signup.php">
    <div class="input-field">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>
    </div>

    <div class="input-field">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="input-field">
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Create a password" required>
    </div>

    <div class="input-field">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" required>
    </div>

    <div class="input-field">
        <label>Mobile Number</label>
        <input type="tel" name="mobile" placeholder="Enter mobile number" required>
    </div>

    <!-- New Field for Doctor's Qualification -->
    <div class="input-field">
        <label>Doctor's Qualification</label>
        <input type="text" name="qualification" placeholder="Enter doctor's qualification" required>
    </div>

    <button type="submit" class="signUpBtn">
        <i class="uil uil-user-plus"></i>
        <span class="btnText">Sign Up</span>
    </button>
</form>

    </div>
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
