<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="views/css/basic.css">
		<style>
.header
{
	height: 200px;
	width: 1600px;
	position: relative;
}

.header #body
{
	position: absolute;
	top: 0px;
	left: 0px;
	height: 300px;
	width: 1200px;
	background-color: orange;
}

.header #nav
{
	position: absolute;
	top: 0px;
	right: 0px;
	height: 300px;
	width: 400px;
	background-color: yellow;
}

.main
{
	height: 800px;
	width: 1600px;
	position: relative;
	background-color: green;
}

.main #nav
{
	position: absolute;
	top: 0px;
	left: 0px;
	height: 800px;
	width: 200px;
	background-color: red;
}

.main #body
{
	position: absolute;
	top: 0px;
	right: 0px;
	height: 800px;
	width: 1400px;
	background-color: purple;
}

.footer
{
	height: 200px;
	width: 1600px;
	background-color: blue;
}



	</style>
	<meta charset="UTF-8">
</head>


<body>
	<div class="header">
		<div id="body">

		</div>
		<div id="nav">
			<?php echo $header_nav; ?>
		</div>
	</div>
	<div class="main">
		<div id="nav">

		</div>
		<div id="body">

		</div>
	</div>
	<div class="footer">

	</div>
</body>
</html>
