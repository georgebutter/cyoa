<?php
$page_array = array(
    192 => 'Continue',
);
changePage($page_array); ?>
<p>You try to clear away the surface of the dam to reveal

the lower section of the nearest mast. The packed mud

is not hard to dislodge, and soon you are scattering

handfuls of twigs, grass and other vegetation. When

you are about three feet down, water starts to seep in,

but you have reached a black band painted around the

mast. A few more inches and, if there is a gold one

below you will know this is from one of your father's

barges. Indeed, as only the 'Doom Duchess' is missing

the proof should be conclusive.
</p>


<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>