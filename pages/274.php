<?php
$page_array = array(
    14 => 'At its Eastern end it joins the Doone River ',
    286 => 'At the other end it forks, one channel going South ',
    213 => 'And another coming in from the North East.'
);
changePage($page_array); ?>
<p>
	This channel runs more or less straight from West to East and is thirteen miles long (thus taking six and a half hours to navigate).
</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>