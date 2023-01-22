<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Log In</title>
</head>
<body>
<div class="container">
    <div class="sidebar">
        <div class="logo">
            <img src="https://picsum.photos/150" alt="">
        </div>
        <div class="sign-up-button">
            <p>Don't have an account?</p>
            <a role="button" href="signup.html">Sign Up</a>
        </div>

    </div>
    <div class="main">
        <h1>Welcome Back</h1>
        <div class="input">
            <form>
                <label for="email" id="email">Email<a href=#>Forgot?</a></label>
                <input type="text" name="email"  pattern="(?![_.-])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}" required>

                <label for="password" id="password" >Password</label>
                <input type="text" name="password" required>

                <div class="sign-up-button">
                    <button type="submit">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

