<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" >
    <link rel="short icon" href="fd to eat.jfif">
</head>
<body>
    
    <div class="hero">

        <div class="login_form">

            <h1>Sign Up</h1>

            <form action="RegistrationHandler.php" method="post"  class="input_box">

                <input type="text" id="txtName" name="txtName" class="field" placeholder="Name">
                <input type="password" id="txtPassword" name="txtPassword" class="field" placeholder="Password" maxlength="8">
                <input type="email" id="txtEmail" name="txtEmail" class="field" placeholder="Email">
                <input type="checkbox"class="check_box"><p>Remember Password</p>
                <button type="submit" id="btnSubmit" name="btnSubmit" class="submit_btn">Sign Up</button>

               

                <div class="tag">
                    <span>Signed Up?</span>
                    <a href="login.php">Log in</a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>