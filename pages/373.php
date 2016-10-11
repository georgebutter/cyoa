<?php
$page_array = array(
    1 => 'Continue',
);
changePage($page_array); ?>
<h1>373</h1>


<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>