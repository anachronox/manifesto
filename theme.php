<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
    <?= $Wcms->css() ?>
        
  </head>

  <body>
    <?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>
    
  	<nav class="navbar navbar-default">
   		<div class="container">
  		<div class="col-sm-5 text-center">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
  					<a href="<?= $Wcms->url() ?>">
  				    <h1><?= $Wcms->get('config', 'siteTitle') ?></h1>
   					</a>
   				</div>
   			</div>
   			<div class="col-sm-7 text-center">
   				<div class="collapse navbar-collapse" id="navMobile">
   					<ul class="nav navbar-nav navbar-right">
              <?= $Wcms->menu() ?>
    				</ul>
    			</div>
    		</div>
    	</div>
    </nav>
    
    <div class="container">
    	<div class="col-xs-12 col-sm-8">
    		<div class="whiteBackground grayFont padding20 rounded5">
          <?= $Wcms->page('content') ?>
   			</div>
   		</div>
   		<div class="col-xs-12 col-sm-4">
   			<div class="visible-xs spacer20"></div>
   			<div class="blueBackground padding20 rounded5">
          <?= $Wcms->block('subside') ?>
   			</div>
   		</div>
   	</div>
    
   	<footer class="container-fluid">
   		<div class="padding20 text-right">
        <?= $Wcms->footer() ?>
   		</div>
   	</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <?= $Wcms->js() ?>
    
    </body>
</html>
