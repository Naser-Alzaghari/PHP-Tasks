<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            display: block;
        }
    </style>
</head>
<body>
    <form action="user_data.php" method="POST">
        <label for="name">name:</label>
        <input type="text" name="name">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password">password:</label>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
</body>
</html>