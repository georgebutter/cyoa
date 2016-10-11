<?php
$page_array = array(
    275 => "The first of these flows in from the West two miles from Howard's Crossing.",
    289 => "The next joins from the East four miles later.",
    301 => "Fifteen miles further on, one joins from the North.",
    91 => "Another five miles and another channel from the East flows in.",
    53 => "Four more miles and there is one from the North.",
    41 => "Nine miles downstream and another channel flows in from the North.",
    108 => "Journey to Howard's Crossing",
    394 => "Travel South West down the Doone to its confluence with the Sol",
);
changePage($page_array); ?>
<p>
The mighty Doone River is the main commerce route to and from the interior of Skyfall. From Howard's Crossing on the North Eastern edge of the Dunmarsh it flows wide and straight for nearly seventy miles South West until it joins the Sol and leaves the marsh some four miles from the sea, just North of Starport.
</p>

<p>
In that distance it is fed by seven tributary channels draining the marsh, two from the East and the other five from the other side.
</p>
<p>
Coming down stream:
</p>
<form method="post">
	<?php foreach(array_slice($page_array, 0, 5, true ) as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>

<p>
	Then there are no more tributaries joining in the last three miles down to the confluence with the Sol.
</p>
<p>
	The journey from Howard's Crossing to the confluence with the Sol, or vice versa, will take you two days, with a break for the night at the halfway point.
</p>
<form method="post">
	<?php foreach(array_slice($page_array, 6, 7, true ) as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>