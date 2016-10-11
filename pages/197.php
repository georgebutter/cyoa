<?php
$page_array = array(
    35 => 'Kill the biggest Ram',
    301 => 'Try for one of the smaller rams',
    197 => 'Try for a ewe or a lamb from the herd.',
    213 => 'Return to your canoe.'
);
changePage($page_array); ?>
<p>
	Moving carefully in an attempt to avoid panicking the herd, you gradually approach the animals. The lambs stick close to their mothers, and are mostly quite small and thin. It does not look as though you could expect more than one day's food from any of them. The Ewes themselves seem a better proposition. Not as large as the biggest Ram, but big enough to be good for four or five days' rations.
</p>
<p>
	You pick out a particularly plump-looking specimen that has no lamb with her, and move in. The herd has become nervous at your approach and is starting to split up into small groups of animals skittering to and fro. The big Ram is dashing about rather like a sheepdog trying to round them up, but the other Rams are not helping by seizing the rare opportunity to fraternize.
</p>
<p>
You get close enough to attack the Ewe, which has Expertise 6 and Vitality 3. It can do no damage, but in the unlikely event that it scores a hit upon you, this will mean it has managed to escape.
</p>
<input type="submit" class="button" name="insert" value="dick" />
<span></span>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>