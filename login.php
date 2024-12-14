<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
    <link rel="short icon" href="fd to eat.jfif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>

    <div class="hero">

        <div class="login_form">

            <h1>Log in</h1>

            <form action="LoginHandler.php" method="post"  class="input_box">

                <input type="text" id="txtEmail" name="txtEmail" class="field" placeholder="Email">
                <input type="password" id="txtPassword" name="txtPassword" class="field" maxlength="8" placeholder="Password">
                <input type="checkbox" class="check_box"><p>Remember Password</p>
                <button type="submit" id="btnSubmit" name="btnSubmit" class="submit_btn">Log in</button>

               

                <div class="tag">
                    <span>New User?</span>
                    <a href="signup.php">Sign Up</a>
                </div>

            </form>

        </div>

    </div>
    
</body>
</html>