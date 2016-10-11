<?php
$page_array = array(
    54 => "Join the guards on board, they will give you a letter of authority and arrange passage to Howard's Crossing on another barge, which is due to set off upriver this afternoon.",
    313 => "If you prefer to play a lone hand, they will provide and equip a sturdy canoe for your use",
);
changePage($page_array); ?>
<p>You are aware that those members of the Guild in town usually meet in their Hall shortly before lunch on working days, so you rise late the next morning, breakfast leisurely and, looking your smartest, present yourself to the half-dozen Bargemasters present at the meeting.</p>

<p>They duly sympathize over your loss and are interested to learn of your proposed quest. They urge caution as (you learn) a well-armed group of experienced fighting men accompanied by a Magician had already been hired for a similar mission. Since they set off into the Dunmarsh in a swift-oared craft over two weeks ago nothing more has been heard from them.</p>

<p>As they know you well, they are prepared to give you one further piece of information. The next barge-load of valuable ores is about to start downriver from the capital, Tan-Delta, on board the Sultan's Favourite with a heavily armed escort and two Magicians. If you leave soon you would be able to meet it at Howard's Crossing on the other side of the Dunmarsh, and either follow it or join the guards.</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>