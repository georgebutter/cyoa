<?php
$page_array = array(
    373 => 'Continue',
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

<p>Bracing yourself, you heave a stout branch out of the

way and there indeed is the gold band. Unfortunately

this has set off a potentially disastrous chain of events,

as the branch had locked the lower end of the mast in

place and now the weight of the upper end, hanging

unsupported over the muddy riverbed, makes the

whole mast act as a form of lever to pry a large chunk

of the dam loose.</p>

<p>Water floods in, under enormous pressure, and the dam

starts to collapse.</p>


<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>