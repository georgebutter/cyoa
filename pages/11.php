<?php
$page_array = array(
    353 => '...',
);
changePage($page_array); ?>
<p>The last of the guard of six Lizardmen lies dead, and

you have succeeded in preventing them giving an

alarm. Add 2 Fortune Points to your Character Sheet.
</p>
<p>There is much quiet backslapping, and together you all

move to the arms store. There you find that the

weapons are all locked in chests and racks, which

causes considerable alarm. Fortunately one of the

prisoners finds the key on a guard's body, but you

realize this could have caused a fatal delay in arming

your men if the alarm had been given.</p>
<p>To guard against accidents, the alarm gong is cut down

and slid into the waters of the pool. Those of the prisoners

too weak to fight are helped aboard a barge and made

comfortable with some of the furs from a hijacked cargo.</p>
<p>Then the fit prisoners split into two groups. One

guards the tunnel to the North West which leads to the

Frogmen's quarters, the other the Eastern one which is

where the rest of the Lizardmen should be sleeping.

They hope to be able to kill several more by surprise,

when they eventually emerge, but are quietly

confident of success in any event, when fighting on

even terms.</p>
<p>To you, they leave the hardest job. A tunnel to the

South is believed to lead to the quarters of the

mysterious Leader. It is only dimly lit by. an occasional

taper set in wall sconces every twenty feet or so.

Taking your choice of weapons and equipment, and

consuming any Potions you wish, you move cautiously

South.</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>
</p>