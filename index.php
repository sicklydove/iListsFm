<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>MyLovedPlaylists</title>
	<script src="./scripts.js" type="text/javascript"></script>
	<link href="./default.css" rel="stylesheet" type="text/css" media="screen"/>
</head>
<body id="body">
<div id="wrapper">
<div id="content">
<form name="sending" onsubmit="getLovedTracks(this.usernameField.value); return false;" action="" >
<h2>Last.fm Username:</h2>
<input type="text" id="usernameField" name="username" />
<input type="submit" value="Go" />
</form>
<form name ="submittion" action="sent.php" id="submitForm" method="post" enctype="multipart/form-data">
</form>
</div>
</div>
</body>
</html>
