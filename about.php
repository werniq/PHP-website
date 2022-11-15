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
    <div class="container mt-5">
    <h3>Contact form</h3>  
    <form action="check.php" method="post">
      <input type="email" name="email" placeholder="Enter email" class="form-control"><br>
      <textarea name="message" class="form-control" placeholder="form-control"></textarea><br>
      <button type="submit" name="send" class="btn btn-success">Send</button>
    </form>
</div>
    <?php require "blocks/footer.php" ?>
</body>
</html>
