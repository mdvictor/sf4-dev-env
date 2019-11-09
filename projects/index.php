<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Symfony Development Environment</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Assistant|Notable&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="icon" href="https://www.shareicon.net/data/512x512/2016/06/19/603895_prog_512x512.png" /> -->
  <link rel="icon" href="https://cdn.auth0.com/blog/symfony-blog/logo.png" />
</head>

<style>
	body {
		font-family: 'Assistant', sans-serif;
		background-color: #CECFC7;
	}

	.notable-font {
		font-family: 'Notable', sans-serif;
		text-align: center;
		color: white;
	}

	#header {
		margin:20px 0;
		text-align: center;
	}

	.bg-orange {
		background-color:#FCA311;
	}

	.app-box {
		min-width: 200px;
		min-height: 150px;
		line-height: 150px;
		text-align: center;
		margin-top: 35px;	

		transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    	transform-origin: center;
	}

	.app-box:hover {
    	-webkit-transform: scale3d(1.25, 1.25, 1);
	}

	.flex-container {
		 padding: 0;
		  list-style: none;
		  
		  display: -webkit-box;
		  display: -moz-box;
		  display: -ms-flexbox;
		  display: -webkit-flex;
		  display: flex;
		  
		  -webkit-flex-flow: row wrap;
		  justify-content: space-around;
	}

	a:hover, a:visited, a:link, a:active
	{
	    text-decoration: none;
	}

	.app-name {
		margin:0 auto;
		font-size: 30px;
		padding: 10px;
		color: #3A3E3B;
	}

	.footer {
	    position: absolute;
	    bottom: 0;
	    width: 100%;
	    height: 60px;
	    line-height: 60px;
	    background-color: #B2B09B;
	}

	a:link, a:visited {
    	text-decoration: none;
    	color: black;
    	cursor: pointer;
	}
</style>

<body>
	<?php
		const INDEX_FILE = 'index.php';
		const MAIN_INDEX_FILES_FOLDER = 'main_index_files';

		$rootUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/';
		$directoryContents = array_diff(scandir('.'), ['.', '..', INDEX_FILE, MAIN_INDEX_FILES_FOLDER]);
	?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	<ul class="nav navbar-nav mx-auto">
        <li class="nav-item">
          	<h1 id="header" class="notable-font">Symfony Development Environment</h1>
        </li>
    </ul>
  </nav>

  <div class="flex-container">
	<?php foreach ($directoryContents as $directory): ?>
		<a href="<?php echo $rootUrl . $directory ?>" target="_blank">
			<div class="d-inline-flex bg-orange app-box">
		 		<b class="app-name"><?php echo $directory ?></b> 
			</div>
		</a>
	<?php endforeach; ?>
  </div>

<footer class="footer">
      <div class="container" style="text-align:center">
        <span style="color: white">Created by <a class="nostyle" target="_blank" href="https://github.com/mdvictor/">mdvictor <i class="fa fa-github"></i></a></span>
      </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>