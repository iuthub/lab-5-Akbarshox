<?php

$post = $_POST['name'].";". $_POST['section'].";". $_POST['card'].";". $_POST['card_type'].";\n";
file_put_contents('suckers.txt', $post, FILE_APPEND);

$get = file_get_contents('suckers.txt');
?>

<h1>Thanks sucker!</h1>

<p>
	Your information has been recorded
</p>

<hr />
<dl>
	<dt>Name</dt>
	<dd>
		<?php echo $_POST['name']?>
	</dd>
	
	<dt>Section</dt>
	<dd>
		<?php echo $_POST['section']?>
	</dd>
	
	<dt>Credit Card</dt>
	<dd>
		<?php echo $_POST['card']?> (<?php echo $_POST['card_type']?>)
	</dd>

	<p>
		Here's the others who have submitted
	</p>
	<pre>
		<?php echo $get; ?>
	</pre>

</dl>