<!DOCTYPE HTML>
<html>
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Main page</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-4">
    <h1>Register form</h1>
    <form action="register.php" method="post">
        <input type="text" placeholder="Enter login" class="form-control" name="login" id="login">
        <input type="text" placeholder="Enter name" class="form-control" name="name" id="name">
        <input type="password" placeholder="Enter password" class="form-control" name="password" id="password">
        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>
    <?php require "blocks/footer.php" ?>
</body>
</html>
