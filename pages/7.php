<?php
$page_array = array(
    100 => 'Approach to see what he has to say',
    194 => 'Return the way you came and follow the stream coming from the North West',
    213 => 'Return the way you came and follow the stream coming from the North East',
    318 => 'try to find some vegetation to camouflage the canoe, with the idea of floating past the Giant disguised as a fallen tree or some such,',
);
changePage($page_array); ?>
<p>The stream runs South West from the point where two others join,
	one coming from the North West and the other from the Nort East.
</p>
<p>After two miles it curves to the South, but just before

the bend you come across a rocky island in the middle

of the stream, at a point where it narrows considerably.

The island is about fifteen feet wide and the water on

each side only some ten feet deep. On this islet sits a

Giant with sludgy-green skin, a big mouth with

stained, crooked teeth, filthy brown trousers made

from the skins of some animal, and noticeable webs of

skin between fingers and toes.
</p>
<p>Although you stopped about a hundred feet away, the

current carries you on and you have to back-water with

your paddle to avoid drifting too close. A wide grin

appears on the Giant's face and he waves encourag-
ingly, urging you closer. Considering his webbed feet,

you decide he could probably move through the marsh

much quicker than you, so by going closer you will

probably not be appreciably more in danger than you

are already.
</p>


<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>