<?php
$page_array = array(
    35 => 'Kill the biggest Ram',
    301 => 'Try for one of the smaller rams',
    197 => 'Try for a ewe or a lamb from the herd.',
    213 => 'Return to your canoe.'
);
changePage($page_array); ?>
<p>
	Landing from your canoe, you are able to moor it to a stunted bush. The grazing animals are several hundred yards away and as you cautiously approach you see they are wild sheep. There are several dozen ewes, many with young lambs, in a loose herd guarded by one very large Ram, with magnificent curved horns. Several more small rams can be seen, all at some little distance from the herd, having presumably been driven off by the biggest one.
</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>