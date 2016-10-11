<?php
$page_array = array(
    98 => "You will be able to hire another canoe, but by the time you set out again the Sultan's Favourite will be some miles downstream.",
);
changePage($page_array); ?>
<p>
You tell the master of the Sultan's Favourite that you intend to trail his craft by canoe. Visibility is good apart from the occasional mists in morning and evening, and the relatively straight course of the Doone will enable you to keep the barge in sight from almost a mile astern. The master suggests he hoists a particularly colourful sail, normally reserved for festivals, which seems a good idea.
</p>

<p>
After a night's undisturbed rest, you wave the barge away early the next day and watch it proceed downriver while you finish a hasty breakfast. When it is about three-quarters of a mile away you can still pick out the red and yellow sail quite easily, and board your canoe to follow.
</p>

<p>
Scarcely have you pulled out into midstream when a chill dampness around your lower body alerts you to the fact that your canoe is leaking, and leaking badly. Indeed you barely make it back to the side before the craft subsides below the surface. Fortunately there is sufficient air trapped in your stowed equipment to prevent the canoe sinking to the bottom, and you are able to pull it to a point where it can be beached.
</p>

<p>
	With your equipment unloaded and spread to dry, you are able to examine the canoe. The wood is hopelessly warped, causing several seams to gape open. You cannot understand this at all as you checked it before the barge set off, and all was in order then.
</p>

<form method="post">
	<?php foreach($page_array as $page_number => $page_name): ?>
		<button type="submit" name="button" value="<?php echo $page_number; ?>"><?php echo $page_name; ?></button>
	<?php endforeach; ?>
</form>