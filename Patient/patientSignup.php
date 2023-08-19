<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMC</title>
    <link rel="stylesheet" href="./patients.css">
</head>
<body>
<h2>Ayao Medical Center</h2>
    <div>
        <h3>Create a new account</h3>
        <p>It's quick and simple</p>
        <hr>
        <form name="signup" action="patientProcessSignup.php" method="post">
        <input type="text" name="fname" id="fname" placeholder="First Name">
        <input type="text" name="lname" id="lname" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="Email Address">
        <input type="text" name="phone" id="phone" placeholder="Phone Number">
        <input type="date" name="dob" id="dob" placeholder="Date of Birth">
        <input type="text" name="gender" id="gender" placeholder="Gender">
        <input type="password" name="password" id="password" placeholder="New Password">
        <button type="submit" value="submit" onclick="validateForm()">Sign up</button>
        </form>
        

        
        <a href="./patientSignin.php"><p class="login-refer">Already having an account?</p></a>
    </div>

    <script src="./patients.js"></script>
</body>
</html>