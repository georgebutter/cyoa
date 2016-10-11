<?php
$page_array = array(
    166 => 'At the North Eastern end it emerges from the North Western corner of a lake',
    63 => 'At the South Eastern end it forks and you may follow a broad stream that runs away to the South',
    104 => 'Investigate a tributary that flows in from the North West';
);
changePage($page_array); ?>
<p>This channel runs fairly straight from North East to

South West and is four miles long, taking two hours to

navigate.
</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>