<?php
$page_array = array(
    379 => "Continue",
);
changePage($page_array); ?>
<p>
Soon after lunch you board the Pride of Starport at the main quay, for the journey upstream to Howard's Crossing. You carry your normal equipment (see Introduction) and are interested to see that all the crewmen and passengers are also carrying arms. And not just the usual ornamental daggers. Swords and axes are much in evidence, and one cowled figure, probably a monk, carries a massive morningstar.
</p>

<p>
The other passengers are a portly, middle-aged merchant; his younger wife; a youth scarcely out of his teens, with a wispy beard and a small sickle strapped to his pack, probably indicating a druid; and two soldiers in the uniform of the Margrave of Syrania, whose lands lie to the South across the Sea of Storms. These latter two keep themselves apart from the rest of you during the journey.
</p>

<p>
Most barges would set off earlier in the day, wishing to make the halfway moorings by nightfall, but the Pride of Starport is a new boat with larger sails and a clean bottom, and is quite the fastest barge on the river. Even so, darkness has descended on the Doone before you see the twinkle of cooking fires on the shore and the riding lights of the few moored barges up ahead.
</p>


<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>