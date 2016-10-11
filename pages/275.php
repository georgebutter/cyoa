<?php
$page_array = array(
    274 => 'A',
);
changePage($page_array); ?>
<p>275
</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>