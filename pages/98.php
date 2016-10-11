<?php
$page_array = array(
    14 => "...",
);
changePage($page_array); ?>
<p>
Despite your late start, you make good time downstream. The river seems full and fast today, and you suspect there may have been some heavy rain further to the North East.
</p>

<p>
Some while before dusk you reach 'Halfway House', the stretch of firm ground where barge crews are wont to anchor for the night, to find only one barge there. They have seen no sign of the 'Sultan's Favourite'.
</p>

<p>
You realize, with a sinking heart, that another barge has been lost, almost under your nose, and your canoe must have been sabotaged in some way to prevent your being a witness. The mystery is, your canoe had been no more than fifty yards away all the time you were seeing the barge off on its last trip, and you are sure you would have noticed anyone acting suspiciously near 
</p>

<p>
Sadly, you spend the night with the barge crew, and set off to search alone the next day.
</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>