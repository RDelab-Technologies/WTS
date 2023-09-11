<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wake Up To Start</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme23.css">

    <style>
        /* Basic styling for form elements */
.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
}

input[type="text"],
input[type="password"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #070303;
    border-radius: 5px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}

/* Center the form on the page */
.centered {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    
}

/* Responsive design */
@media (min-width: 768px) {
    /* Increase form size on larger screens */
    .form-group {
        margin-bottom: 30px;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"] {
        font-size: 18px;
    }

    button[type="submit"] {
        font-size: 18px;
    }
}

/* Style the form container */
#registration-container {
    max-width: 400px; /* Adjust this to your preferred maximum width */
    text-align: center;
}

/* Add space between first and last name */
.name-fields {
    display: flex;
    justify-content: space-between;
}

/* Center the button */
button[type="submit"] {
    margin-top: 20px;
}

    </style>


</head>


<body>
    
            <!-- registration form  -->
            <div id="registration-container" class="hidden centered">
                <h2>Create a New Account</h2>
                <form action="save.php" method="post">
                    
                    <div class="form-group">
                        <div class="name-fields">
                            <div class="form-group">
                                <label for="firstName"></label>
                                <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName"></label>
                                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="emailOrPhone"></label>
                        <input type="text" id="emailOrPhone" name="emailOrPhone" placeholder="Email Or Phone Number"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword"></label>
                        <input type="password" id="newPassword" name="newPassword" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <label for="companyName"></label>
                        <input type="text" id="companyName" name="companyName" placeholder="Company Name" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfIncorporation">Date of Incorporation:</label>
                        <input type="date" id="dateOfIncorporation" name="dateOfIncorporation"
                            placeholder="Date of Incorporation" required>
                    </div>

                    <button type="submit">Sign Up</button>
                </form>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const showRegistrationLink = document.getElementById("show-registration-form");

                    const registrationContainer = document.getElementById("registration-container");

                    showRegistrationLink.addEventListener("click", function (e) {
                        e.preventDefault();
                        if (registrationContainer.style.display === "none" || registrationContainer.style.display === "") {
                            registrationContainer.style.display = "block";
                        } else {
                            registrationContainer.style.display = "none";
                        }
                    });
                });
            </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript.util/0.12.12/javascript.util.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>

</html>