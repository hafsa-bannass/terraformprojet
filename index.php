<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Webpage</title>
</head>
<body>

    <style>
        body {
            background: #c7bbcc;
        }
    </style>
    <style>
        p {
            text-align: center;
            font-family: 'Fira Mono', monospace;
            font-size: x-large;
            color: #7B42BC;
            background: #c7bbcc;
        }
    </style>
    <?php
		// Balises PHP pour la partie dynamique
		$yourName = "Hafsa Bannass";
		$deploymentInfo = " J'ai déployé cette page web dans le AWS cloud utilisant Terraform.";
	?>
    <p> 
		Je suis  <strong><?php echo $yourName; ?></strong>
		<br>
		<?php echo $deploymentInfo; ?>
	</p>

    <center><img src="image.jpg" style="width: 425px; height: 285px; align-content: center;"></center>
   

</body>
</html>
