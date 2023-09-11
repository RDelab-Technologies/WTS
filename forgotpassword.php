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
      /* Styling for the Forgot Password Form */
#forgot-password-form {
    max-width: 400px; /* Adjust the maximum width as needed */
    text-align: center;
    margin: 0 auto;
}

#forgot-password-form h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
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

/* Add space between input fields */
.form-group:not(:last-child) {
    margin-bottom: 20px;
}

    </style>
</head>

<body>
    
     <!-- Forgot Password Form -->
     <div id="forgot-password-form" class="hidden centered">
        <h2>Forgot Password</h2>
        <form action="create.php" method="post">
          <fieldset>
            <legend>Create</legend>
            <mark>
              <?php if (isset($_GET['ms'])) {
                echo $_GET['ms'];
                
              }?>
            </mark>
          <div class="form-group">
            <input type="text" id="forgotPasswordCompanyName" name="companyName" placeholder="Company Name" required>
          </div>
          <div class="form-group">
            <input type="text" id="forgotPasswordEmailOrPhone" name="emailOrPhone" placeholder="Email or Phone Number" required>
          </div>
          <div class="form-group">
            <input type="password" id="forgotPasswordNewPassword" name="newPassword" placeholder="New Password" required>
          </div>
          <div class="form-group">
            <input type="password" id="forgotPasswordConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
          </div>
          <button type="submit">Sign In</button>
          </fieldset>
        </form>
      </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
          // Find the "Forgot Password?" link
          const forgotPasswordLink = document.getElementById("forgot-password-link");
      
          // Find the "Forgot Password" form container
          const forgotPasswordForm = document.getElementById("forgot-password-form");
      
          // Add a click event listener to the link
          forgotPasswordLink.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent the default link behavior
      
            // Toggle the display of the "Forgot Password" form
            if (forgotPasswordForm.style.display === "none" || forgotPasswordForm.style.display === "") {
              forgotPasswordForm.style.display = "block";
            } else {
              forgotPasswordForm.style.display = "none";
            }
          });
        });
      </script>
      
    </body>

</html>