<?php
$page_array = array(
    2 => 'Continue',
);
changePage($page_array);
?>
<h1>You must immerse yourself in the exciting world of your character.</h1>

<p>No two journeys in Skyfall are the same. If you want to survive to tell the tale you will need to:</p>
	<ul>
		<li>Reason logically from the information given to you at each turn of the plot.</li>
		<li>Consider your options carefully, once you make a decision, <em>there is no going back.</em></li>
		<li>Use your resources wisely, if you waste them it may cost you dearly later.</li>
	</ul>
<p>Good luck... you'll need it.</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>