<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<form enctype="multipart/form-data" action="post.php" method="POST">
        <!-- Название элемента input определяет имя в массиве $_POST -->
        <label for="name" >Имя пользователя: </label>
        <input type="text" id="name" name="name" placeholder="Логин или email" required/>
        </br>
        <input type="submit" value="Войти"/>
    </form>
</body>
</html>