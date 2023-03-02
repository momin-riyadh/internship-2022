<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email Address @gmail.com">
        <input type="text" name="address" placeholder="Address">
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="SUBMIT">
    </form>
</body>
</html>