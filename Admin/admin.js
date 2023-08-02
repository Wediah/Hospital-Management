function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var password = document.getElementById("password").value;
    var gender = document.getElementById("gender").value;
    
    if (fname === '' || email === '' || phone === '' || password === '' || gender === '') {
        alert("All fields are required!");
        return false;
    }

    // Validate email format
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address!");
        return false;
    }

    // Validate phone number format (assuming a 10-digit US phone number)
    var phonePattern = /^\d{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number!");
        return false;
    }

    // Additional password validation if needed
    // e.g., minimum password length, special characters, etc.

    // If all validations pass, submit the form
    alert("Form submitted successfully!");
    document.signup.submit();
}

