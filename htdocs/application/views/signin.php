<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<meta charset="UTF-8">
</head>


<body>
	<div id="login_form">
		<form action="?controller=login&method=signin_auth" method="POST">
			<table>
				<tr>
					<td colspan=2>Please choose a username and a password.</td>
				</tr>
				<tr>
					<td>Votre nom d'utilisateur</td>
					<td><input type="text" name="login" value="<?php echo $memo_login?>"/></td>
				</tr>
				<tr>
					<td>Votre mot de passe</td>
					<td><input type="password" name="pw" value="<?php echo $memo_pw?>"/></td>
				</tr>
				<tr>
					<td colspan=2><input type="submit" name="submit" value="ok" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
