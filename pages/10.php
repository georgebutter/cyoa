<?php
$page_array = array(
    329 => 'Try the ring on',
    356 => 'Loot the items and continue'
);
changePage($page_array); ?>
<p>With a thud which shakes the island, the Giant

collapses, dead. Add 4 Fortune Points to your

Character Sheet and increase your Expertise by 1 Point.

You may take food and drink at this point - providing

you have food of your own as a search of the island will

not produce any. You will, however, find a sack in

which the Giant kept a few souvenirs. None of these

have any value except possibly a small copper ring on

which a few runes are inscribed and a small potion

bottle, marked <em>'Neutralise Poison'</em>.
</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>