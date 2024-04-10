<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<main>
    <form action="register.php" method = 'post'>
        <input type="text" placeholder="login" name = 'login'>
        <input type="text" placeholder="password" name = 'pass'>
        <input type="text" placeholder="repeat_password" name = 'repeats'>
        <input type="text" placeholder="email" name = 'email'>
        <button type = 'submit'>Зарегистрироваться</button>
    </form>


    <form action="login.php" method = 'post'>
        <input type="text" placeholder="login" name = 'login'>
        <input type="text" placeholder="password" name = 'pass'>
        <button type = 'submit'>Войти</button>
    </form>

</main>
</body>
</html>