<?php

$page = 'main';
if(isset($_POST['name']) && isset($_POST['section']) && isset($_POST['card']) && isset($_POST['card_type']))
{
	if(empty(trim($_POST['name'])) || empty(trim($_POST['section'])) || empty(trim($_POST['card'])) || empty(trim($_POST['card_type'])))
		$page = 'empty';
	else
		$page = 'complete';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
	<?php 
	if($page == 'main')
		include 'snippets/form.php';
	else if($page == 'empty')
		include 'snippets/empty.php';
	else if($page == 'complete')
		include 'snippets/complete.php';
	?>
	</body>
</html>