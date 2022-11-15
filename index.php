<!DOCTYPE HTML>
<html>
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Php website</title>
</head>
<body>
<?php require "blocks/header.php" ?>

<div class="container mt-5">
    <h3 class="mb-5" >Our news</h3>

			<div class="d-flex flex-wrap">
			<?php 
				for ($i = 0; $i < 5; $i++):
			?>		<div class="card mb-4 shadow-sm">
						<div class="card-header">
							<h4 class="my-0 font-weight-normal">Just text</h4>
						</div>
								<div class="card-body">
									<img class="img-thumbnail" src="img/<?php echo ($i + 1) ?>.jpg"></img>							
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
			<?php endfor; ?>
		</div>
	</div>    
<?php require "blocks/footer.php" ?>
	
</body>
</html>
