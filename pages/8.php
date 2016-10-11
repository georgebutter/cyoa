<?php
$page_array = array(
    69 => 'There is no sound from the room, enter anyway.',
    110 => 'Return to the cavern',
);
changePage($page_array); ?>
<p>This passage is ten feet wide and roughly ten feet high,

but the roof and walls are quite uneven. It looks as

though a natural passage in the rock has merely been

widened here and there. The floor has some dusty

patches, but is much cleaner than the other two

passages leading from the main cavern.
</p>
<p>The passage is fifteen feet long: at the Eastern end is a

large cavern, while the other end leads to a half open

door. Peering cautiously around the door, you will see a

room some twenty feet from East to West and perhaps

thirty feet wide. There is a closed door in the centre of

the opposite wall and there are some chairs and

benches with equipment upon them.
</p>
<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>