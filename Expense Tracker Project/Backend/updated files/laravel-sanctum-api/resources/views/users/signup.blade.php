<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/signup.css">
    <title>Sign Up</title>
</head>
<body>
<div class="container">
    <div class="main">
        <h1>Welcome</h1>
        <div class="input">

            <form method="POST" action="/api/register">
                @csrf
                <input type="text" name="username" placeholder="Username" required>

                @error('username')
                <p>username error</p>
                @enderror

                <input type="text" name="email" placeholder="Email" pattern="(?![_.-])((?![_.-][_.-])[a-zA-Z\d_.-]){0,63}[a-zA-Z\d]@((?!-)((?!--)[a-zA-Z\d-]){0,63}[a-zA-Z\d]\.){1,2}([a-zA-Z]{2,14}\.)?[a-zA-Z]{2,14}" required>

                @error('email')
                <p>email error</p>
                @enderror

                <input type="text" name="password" placeholder="Password" required>

                @error('password')
                <p>password error</p>
                @enderror

                <input type="text" name="password_confirmation" placeholder="Confirm Password">

                @error('password_confirmation')
                <p>password_confirmation error</p>
                @enderror

                <div class="sign-up-button">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
    <div class="sidebar">
        <div class="logo">
            <img src="https://picsum.photos/150" alt="">
        </div>
        <div class="log-in-button">
            <p>Already have an account?</p>
            <a role="button" href="login">Log In</a>
        </div>

    </div>
</div>
</body>
</html>
